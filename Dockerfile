FROM php:8.2-apache

# Enable Apache mod_rewrite for clean URL routing
RUN a2enmod rewrite

# Configure Apache to allow .htaccess overrides and DirectoryIndex
RUN echo "<Directory /var/www/html>\n\
    Options -Indexes +FollowSymLinks\n\
    AllowOverride All\n\
    Require all granted\n\
    DirectoryIndex index.php index.html\n\
</Directory>" > /etc/apache2/conf-available/override.conf \
    && a2enconf override

# Set working directory
WORKDIR /var/www/html

# Copy application source code
COPY . /var/www/html/

# Set permissions for Apache web server
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Expose port
EXPOSE 80

# Support dynamic $PORT environment variable used by cloud platforms, default to 80
CMD sh -c "sed -i 's/Listen 80/Listen '\${PORT:-80}'/g' /etc/apache2/ports.conf && sed -i 's/:80/: '\${PORT:-80}'/g' /etc/apache2/sites-available/000-default.conf && exec apache2-foreground"

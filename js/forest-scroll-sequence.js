/**
 * Forest Revealing Scroll Sequence & Interactive Multi-Stage Journey
 * Navtaara Ultra-Luxury Cinematic Scroll Engine
 */
(function () {
    function initForestScroll() {
        var container = document.getElementById('forestScrollContainer');
        var canvas = document.getElementById('forestCanvas');
        if (!container || !canvas) return;

        var ctx = canvas.getContext('2d');
        if (!ctx) return;

        var TOTAL_FRAMES = 120;
        var frames = [];
        var framesLoaded = 0;
        var girlImg = new Image();
        girlImg.src = 'images/serene_meditation_woman_seamless.png';

        // Preload all 120 video frames
        for (var i = 1; i <= TOTAL_FRAMES; i++) {
            var img = new Image();
            var padNum = String(i).padStart(3, '0');
            img.src = 'images/frames/ezgif-frame-' + padNum + '.jpg';
            img.onload = function () {
                framesLoaded++;
                if (framesLoaded === 1) {
                    canvas.style.opacity = '1';
                    drawFrame(0);
                }
            };
            frames.push(img);
        }

        function drawCover(img, alpha) {
            if (!img || !img.complete || !img.naturalWidth) return;
            var cw = canvas.width;
            var ch = canvas.height;
            var iw = img.naturalWidth;
            var ih = img.naturalHeight;

            var scale = Math.max(cw / iw, ch / ih);
            var nw = iw * scale;
            var nh = ih * scale;
            var cx = (cw - nw) / 2;
            var cy = (ch - nh) / 2;

            ctx.save();
            ctx.globalAlpha = (alpha === undefined ? 1 : alpha);
            ctx.drawImage(img, cx, cy, nw, nh);
            ctx.restore();
        }

        function drawFrame(progress) {
            ctx.clearRect(0, 0, canvas.width, canvas.height);

            if (progress < 0.52) {
                var normalized = progress / 0.52;
                var frameIndex = Math.min(TOTAL_FRAMES - 1, Math.max(0, Math.floor(normalized * TOTAL_FRAMES)));
                var currentFrame = frames[frameIndex] || frames[0];
                if (currentFrame) {
                    drawCover(currentFrame, 1);
                }
            } else {
                var lastFrame = frames[TOTAL_FRAMES - 1] || frames[0];
                if (lastFrame) {
                    drawCover(lastFrame, 1);
                }
                var fadeProgress = Math.min(1, Math.max(0, (progress - 0.52) / 0.08));
                if (girlImg.complete && girlImg.naturalWidth > 0) {
                    drawCover(girlImg, fadeProgress);
                }
            }
        }

        // Element references
        var cloud1 = document.getElementById('forestCloud1');
        var cloud2 = document.getElementById('forestCloud2');
        var cloud3 = document.getElementById('forestCloud3');

        var stage1 = document.getElementById('forestStage1');
        var stage2 = document.getElementById('forestStage2');
        var stage3 = document.getElementById('forestStage3');
        var stage4 = document.getElementById('forestStage4');

        var step1 = document.getElementById('forestStep1');
        var step2 = document.getElementById('forestStep2');
        var step3 = document.getElementById('forestStep3');
        var scrollIndicator = document.getElementById('forestScrollIndicator');

        function clamp(val, min, max) {
            return Math.min(max, Math.max(min, val));
        }

        function mapRange(val, inMin, inMax, outMin, outMax) {
            if (val <= inMin) return outMin;
            if (val >= inMax) return outMax;
            return outMin + (outMax - outMin) * ((val - inMin) / (inMax - inMin));
        }

        function interpolateRange(val, points, outputs) {
            if (val <= points[0]) return outputs[0];
            if (val >= points[points.length - 1]) return outputs[outputs.length - 1];
            for (var i = 0; i < points.length - 1; i++) {
                if (val >= points[i] && val <= points[i + 1]) {
                    return mapRange(val, points[i], points[i + 1], outputs[i], outputs[i + 1]);
                }
            }
            return outputs[outputs.length - 1];
        }

        function setStageState(el, opacity, translateY, scale) {
            if (!el) return;
            el.style.opacity = opacity.toFixed(3);
            var transform = 'translate3d(0, ' + translateY.toFixed(1) + 'px, 0)';
            if (scale !== undefined) {
                transform += ' scale(' + scale.toFixed(3) + ')';
            }
            el.style.transform = transform;
            el.style.pointerEvents = opacity > 0.15 ? 'auto' : 'none';
        }

        var ticking = false;

        function updateScroll() {
            var rect = container.getBoundingClientRect();
            var totalScroll = container.offsetHeight - window.innerHeight;
            if (totalScroll <= 0) return;

            var currentY = -rect.top;
            var progress = clamp(currentY / totalScroll, 0, 1);

            // Render Canvas Frame
            drawFrame(progress);

            // Clouds Parallax & Opacity
            var cloudOp = interpolateRange(progress, [0, 0.15, 0.5, 0.85, 1], [0.2, 0.85, 0.75, 0.4, 0]);
            if (cloud1) {
                var c1x = interpolateRange(progress, [0, 0.5, 1], [-20, 40, 100]);
                cloud1.style.transform = 'translate3d(' + c1x + '%, 0, 0)';
                cloud1.style.opacity = cloudOp.toFixed(3);
            }
            if (cloud2) {
                var c2x = interpolateRange(progress, [0, 0.5, 1], [30, -20, -80]);
                cloud2.style.transform = 'translate3d(' + c2x + '%, 0, 0)';
                cloud2.style.opacity = cloudOp.toFixed(3);
            }
            if (cloud3) {
                var c3x = interpolateRange(progress, [0, 0.6, 1], [-40, 20, 80]);
                cloud3.style.transform = 'translate3d(' + c3x + '%, 0, 0)';
                cloud3.style.opacity = cloudOp.toFixed(3);
            }

            // Scroll Prompt: Visible at entrance and during Stage 1, fades out smoothly as journey advances
            if (scrollIndicator) {
                var indOp = interpolateRange(progress, [0, 0.12, 0.20], [1, 1, 0]);
                var indY = interpolateRange(progress, [0, 0.12, 0.20], [0, 0, 15]);
                scrollIndicator.style.opacity = indOp.toFixed(3);
                scrollIndicator.style.transform = 'translate(-50%, ' + indY.toFixed(1) + 'px)';
                scrollIndicator.style.pointerEvents = indOp > 0.1 ? 'auto' : 'none';
            }

            // Section 1: Foundation Accordion (0.02 -> 0.05 in, 0.15 -> 0.18 out)
            var s1Op = interpolateRange(progress, [0.02, 0.05, 0.15, 0.18], [0, 1, 1, 0]);
            var s1Y = interpolateRange(progress, [0.02, 0.05, 0.15, 0.18], [40, 0, 0, -30]);
            setStageState(stage1, s1Op, s1Y);

            // Section 2: The Circle (0.20 -> 0.23 in, 0.33 -> 0.36 out)
            var s2Op = interpolateRange(progress, [0.20, 0.23, 0.33, 0.36], [0, 1, 1, 0]);
            var s2Y = interpolateRange(progress, [0.20, 0.23, 0.33, 0.36], [40, 0, 0, -30]);
            setStageState(stage2, s2Op, s2Y);

            // Section 3: Who Guides You (Knowledge Library) (0.38 -> 0.41 in, 0.50 -> 0.53 out)
            var s3Op = interpolateRange(progress, [0.38, 0.41, 0.50, 0.53], [0, 1, 1, 0]);
            var s3Y = interpolateRange(progress, [0.38, 0.41, 0.50, 0.53], [40, 0, 0, -30]);
            setStageState(stage3, s3Op, s3Y);

            // Section 4: The Process (0.54 -> 0.57 in, stationary 1.0 through the end)
            var s4Op = interpolateRange(progress, [0.54, 0.57, 1.0], [0, 1, 1]);
            var s4Y = interpolateRange(progress, [0.54, 0.57, 1.0], [30, 0, 0]);
            setStageState(stage4, s4Op, s4Y);

            // Step 1: Fades in early (0.58 -> 0.61) & holds
            var st1Op = interpolateRange(progress, [0.58, 0.61, 1.0], [0, 1, 1]);
            var st1Y = interpolateRange(progress, [0.58, 0.61, 1.0], [25, 0, 0]);
            var st1Scale = interpolateRange(progress, [0.58, 0.61, 1.0], [0.92, 1, 1]);
            setStageState(step1, st1Op, st1Y, st1Scale);

            // Step 2: Fades in second (0.62 -> 0.65) & holds
            var st2Op = interpolateRange(progress, [0.62, 0.65, 1.0], [0, 1, 1]);
            var st2Y = interpolateRange(progress, [0.62, 0.65, 1.0], [25, 0, 0]);
            var st2Scale = interpolateRange(progress, [0.62, 0.65, 1.0], [0.92, 1, 1]);
            setStageState(step2, st2Op, st2Y, st2Scale);

            // Step 3: Fades in third (0.66 -> 0.69) & holds
            var st3Op = interpolateRange(progress, [0.66, 0.69, 1.0], [0, 1, 1]);
            var st3Y = interpolateRange(progress, [0.66, 0.69, 1.0], [25, 0, 0]);
            var st3Scale = interpolateRange(progress, [0.66, 0.69, 1.0], [0.92, 1, 1]);
            setStageState(step3, st3Op, st3Y, st3Scale);

            ticking = false;
        }

        function requestTick() {
            if (!ticking) {
                window.requestAnimationFrame(updateScroll);
                ticking = true;
            }
        }

        function handleResize() {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
            requestTick();
        }

        window.addEventListener('resize', handleResize);
        window.addEventListener('scroll', requestTick, { passive: true });

        handleResize();
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initForestScroll);
    } else {
        initForestScroll();
    }
})();

<?php
class PurpleRainBackground {
    private $numBalls;

    public function __construct($numBalls = 15) {
        $this->numBalls = $numBalls;
    }

    public function render() {
        $html = "<canvas id='purpleRainCanvas'></canvas>";
        $html .= $this->generateJavaScript();
        return $html;
    }

    private function generateJavaScript() {
        $js = "<script>
        document.addEventListener('DOMContentLoaded', function() {
            const canvas = document.getElementById('purpleRainCanvas');
            const ctx = canvas.getContext('2d');
            const balls = [];
            let isDragging = false;
            let draggedBall = null;
            let dpr = window.devicePixelRatio || 1;

            class Ball {
                constructor(canvasWidth, canvasHeight) {
                    this.radius = (20 + Math.random() * 30) * dpr;
                    this.x = Math.random() * canvasWidth;
                    this.y = Math.random() * canvasHeight;
                    this.speedX = ((Math.random() - 0.5) * 2) * dpr;
                    this.speedY = ((Math.random() - 0.5) * 2) * dpr;
                    this.color = this.getRandomPurpleGradient();
                    this.isHeld = false;
                }

                getRandomPurpleGradient() {
                    const hue = 270 + Math.random() * 60;
                    const saturation = 50 + Math.random() * 50;
                    const lightness = 50 + Math.random() * 30;
                    return `hsla(\${hue}, \${saturation}%, \${lightness}%, 0.6)`;
                }

                update(canvasWidth, canvasHeight) {
                    if (!this.isHeld) {
                        this.x += this.speedX;
                        this.y += this.speedY;

                        if (this.x < this.radius || this.x > canvasWidth - this.radius) this.speedX *= -1;
                        if (this.y < this.radius || this.y > canvasHeight - this.radius) this.speedY *= -1;
                    }
                }

                draw(ctx) {
                    ctx.beginPath();
                    ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
                    ctx.fillStyle = this.color;
                    ctx.fill();
                }

                isClicked(mouseX, mouseY) {
                    const distance = Math.sqrt((mouseX - this.x) ** 2 + (mouseY - this.y) ** 2);
                    return distance <= this.radius;
                }
            }

            function init() {
                balls.length = 0;
                for (let i = 0; i < {$this->numBalls}; i++) {
                    balls.push(new Ball(canvas.width, canvas.height));
                }
            }

            function animate() {
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                balls.forEach(ball => {
                    ball.update(canvas.width, canvas.height);
                    ball.draw(ctx);
                });
                requestAnimationFrame(animate);
            }

            function resizeCanvas() {
                const workSection = document.querySelector('.work-section');
                const rect = workSection.getBoundingClientRect();
                
                canvas.style.width = rect.width + 'px';
                canvas.style.height = rect.height + 'px';
                canvas.width = rect.width * dpr;
                canvas.height = rect.height * dpr;
                
                ctx.scale(dpr, dpr);
                
                init();
            }

            canvas.addEventListener('mousedown', (e) => {
                const rect = canvas.getBoundingClientRect();
                const mouseX = (e.clientX - rect.left) * dpr;
                const mouseY = (e.clientY - rect.top) * dpr;

                balls.forEach(ball => {
                    if (ball.isClicked(mouseX, mouseY)) {
                        isDragging = true;
                        draggedBall = ball;
                        ball.isHeld = true;
                    }
                });
            });

            canvas.addEventListener('mousemove', (e) => {
                if (isDragging && draggedBall) {
                    const rect = canvas.getBoundingClientRect();
                    draggedBall.x = (e.clientX - rect.left) * dpr;
                    draggedBall.y = (e.clientY - rect.top) * dpr;
                }
            });

            canvas.addEventListener('mouseup', () => {
                isDragging = false;
                if (draggedBall) {
                    draggedBall.isHeld = false;
                    draggedBall = null;
                }
            });

            window.addEventListener('resize', resizeCanvas);

            resizeCanvas();
            animate();
        });
        </script>";
        return $js;
    }
}

// Usage
$purpleRainBackground = new PurpleRainBackground();
echo $purpleRainBackground->render();
?>
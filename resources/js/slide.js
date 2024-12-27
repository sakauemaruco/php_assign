let target = 0;
let current = 0;
const ease = 0.075;

const slider = document.querySelector(".slider");
const sliderWrapper = document.querySelector(".slider-wrapper");
const slides = document.querySelectorAll(".slide");

let maxScroll = sliderWrapper.offsetWidth - window.innerWidth;

// 線形補間関数
function lerp(start, end, factor) {
    return start + (end - start) * factor;
}

// 各スライドのスケールと位置を更新
function updateScaleAndPosition() {
    slides.forEach((slide) => {
        const rect = slide.getBoundingClientRect();
        const centerPosition = (rect.left + rect.right) / 2;
        const distanceFromCenter = centerPosition - window.innerWidth / 2;

        let scale, offsetX;
        if (distanceFromCenter > 0) {
            scale = Math.min(1.75, 1 + distanceFromCenter / window.innerWidth);
            offsetX = (scale - 1) * 300;
        } else {
            scale = Math.max(
                0.5,
                1 - Math.abs(distanceFromCenter) / window.innerWidth
            );
            offsetX = 0;
        }

        gsap.set(slide, { scale: scale, x: offsetX });
    });
}

// アニメーションの更新
function update() {
    current = lerp(current, target, ease);

    gsap.set(".slider-wrapper", {
        x: -current,
    });

    updateScaleAndPosition();

    requestAnimationFrame(update);
}

// リサイズイベント
window.addEventListener("resize", () => {
    maxScroll = sliderWrapper.offsetWidth - window.innerWidth;
});

// スクロールイベント
window.addEventListener("wheel", (e) => {
    target += e.deltaY;
    target = Math.max(0, target);
    target = Math.min(maxScroll, target);
});

// 初期化
window.onload = () => {
maxScroll = sliderWrapper.offsetWidth - window.innerWidth;
update(); // 初期化
};
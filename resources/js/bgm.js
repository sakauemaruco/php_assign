// 効果音の要素を取得
const hoverSound = document.getElementById('hover-sound');
const hoverItems = document.querySelectorAll('.hover-item');

// マウスホバー時に効果音を再生
hoverItems.forEach(item => {
  item.addEventListener('mouseover', () => {
    hoverSound.currentTime = 0; // 再生位置をリセット
    hoverSound.play();
  });
});
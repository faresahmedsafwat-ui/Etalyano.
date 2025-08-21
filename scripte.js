// زرار "قراءة" اللي بيظهر المقال
document.querySelectorAll('.toggle-btn').forEach(button => {
  button.addEventListener('click', () => {
    const para = button.nextElementSibling;
    para.classList.toggle('hidden');
    button.textContent = para.classList.contains('hidden') ? 'قراءة' : 'إخفاء';
  });
});
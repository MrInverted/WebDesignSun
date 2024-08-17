try {
  const input = document.querySelector(".header__search input");
  const button = document.querySelector(".header__search i");

  const navigate = () => {
    const value = input?.value;
    const url = window.location.origin + "/?s=" + value;
    if (value.trim()) window.location.assign(url);
  }

  button.onclick = () => navigate();
  input.onkeydown = (e) => {
    if (e.key === "Enter") navigate();
  }
} catch (error) {
  console.warn(error)
}
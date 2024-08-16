try {
  const navItems = document.querySelectorAll(".header__nav-item");
  const navTriggers = document.querySelectorAll("nav-trigger");
  const navContents = document.querySelectorAll("nav-content");

  const closeAll = () => {
    navTriggers?.forEach(item => item?.classList.remove("active"));
    navContents?.forEach(item => item?.classList.remove("active"));
  }

  navItems.forEach(li => {
    const navTrigger = li.querySelector("nav-trigger");
    const navContent = li.querySelector("nav-content");

    if (!navTrigger || !navContent) return;

    navTrigger.onclick = () => {
      const isAlreadyOpened = navTrigger.classList.contains("active");
      if (isAlreadyOpened) return closeAll();

      closeAll();
      navTrigger.classList.toggle("active");
      navContent.classList.toggle("active");
    }
  })
} catch (error) {
  console.warn(error);
}

try {
  const burger = document.querySelector(".header__mobile-burger");
  const mobileContent = document.querySelector(".header__nav");

  if (burger) burger.onclick = () => {
    if (!mobileContent) return;

    document.body.classList.toggle("burger-is-opened");
    mobileContent.classList.toggle("active");
  }
} catch (error) {
  console.warn(error);
}
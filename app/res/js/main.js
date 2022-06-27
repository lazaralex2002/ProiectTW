function navOpen()
{
    var x = document.getElementById("navbar");
    if (x.classList.contains("active"))
    {
      x.classList.remove("active")
    } else
    {
      x.classList.add("active")
    }
  }
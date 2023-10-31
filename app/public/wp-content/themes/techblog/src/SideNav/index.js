export default class SideNav {
   constructor() {
      this.el = document.querySelector("nav#mobile")
      this.open_btn = document.querySelector("#menu")
      this.close_btn = document.querySelector("#close")
      this.open_btn.addEventListener("click", this.open.bind(this))
      this.close_btn.addEventListener("click", this.close.bind(this))
   }

   open() {
      if(this.el.dataset.open === "false"){
         this.el.dataset.open = "true"
         this.el.style = "transform: translateX(0)"
      }
   }

   close() {
      this.el.dataset.open = "false"
      this.el.style = "transform: translateX(-100%)"
   }
}
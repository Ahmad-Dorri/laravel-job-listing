export default (initialOpenState = false) => ({
    open: initialOpenState,
    toggle() {
        console.log(this.open)
        this.open = !this.open;
    },
})

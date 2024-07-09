export default (initialOpenState = false) => ({
    open: initialOpenState,
    toggle() {
        this.open = !this.open;
    },
})

export default defineNuxtRouteMiddleware((to, from) => {
    const token = useCookie('token')
    if (token.value) {
        return navigateTo('/')
    }

})

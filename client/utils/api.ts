import Http from '@/utils/request'

export const send = (params: any) => {
    return Http.post('api/send_bot', params)
}

export const logins = (params: any) => {
    return Http.post('api/web_login', params)
}
export const register = (params: any) => {
    return Http.post('api/register', params)
}

export const get_message = () => {
    return Http.post('api/get_message')
}
export const c_message = (params: any) => {
    return Http.post('api/check_message', params)
}

export const searchs = (params: any) => {
    return Http.post('api/searchs', params)
}

export const del_msg = (params: any) => {
    return Http.post('api/del_msg', params)
}

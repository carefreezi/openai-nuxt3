import { ElMessage } from 'element-plus'
const fetch = (url: string, options?: any): Promise<any>  => {
    const token = useCookie("token");
    const headers = { // headers信息
        'Authorization' : `Bearer ${token.value}`
    }
    const { public: { baseUrl } } = useRuntimeConfig()
    const reqUrl = baseUrl + url
    return new Promise(async (resolve, reject) => {
        useFetch(reqUrl, { ...options, headers }).then(({ data,error }: any) => {

            if (!data._rawValue) {
                console.log(data._rawValue)
                // 这里处理错误回调
                reject(error._rawValue.data)
            }else if(data._rawValue.status != 200){
                ElMessage({
                    message: data._rawValue.message,
                    type: 'error',
                })
            } else {
                resolve(ref(data))
            }
        }).catch((err: any) => {
            reject(err)
        })
    })
}

export default new class Http {

    get(url: string, params?: any): Promise<any> {
        return fetch(url, { method: 'get', params })
    }

    post(url: string, params?: any): Promise<any>  {
        return fetch(url, { method: 'post', params })
    }

    put(url: string, body?: any): Promise<any>  {
        return fetch(url, { method: 'put', body })
    }

    delete(url: string, body?: any): Promise<any>  {
        return fetch(url, { method: 'delete', body })
    }
}

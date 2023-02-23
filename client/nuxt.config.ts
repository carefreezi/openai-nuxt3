// https://nuxt.com/docs/api/configuration/nuxt-config

import { loadEnv } from 'vite'


export default defineNuxtConfig({
    app: {
        head: {
           title: 'ChatGPT中文网 - 免费AI问答',
            meta: [
                { charset: 'utf-8' },
                { name: 'viewport', content: 'width=device-width, initial-scale=1' },
                { hid: 'description', name: 'description', content: 'chatGPT专业版，免费AI问答功能，采用GPT-3机器人，答案更精准，实现AI回答轻松获取，智能答案免去千篇一律，自动代码输出，引导程序员、办公人员、学生等写作思路' },
                { hid: 'description', name: 'keywords', content: 'chatgpt,openai,人工智能对话,在线聊天,免费ai问答' },

            ],
            link: [
                { rel: "icon", href: "/favicon.ico", type: 'image/x-icon'},
            ],
        }
    },
    css: [
        '~/assets/css/bootstrap-datepicker.min.css',
        '~/assets/fonts/material-icon/css/material-design-iconic-font.min.css',
        '~/assets/css/style.min.css',
        '~/assets/css/main.css',
    ],

    runtimeConfig: { // 运行时常量
        public:
            { // 客户端-服务的都能访问
                baseUrl: loadEnv(process.argv[process.argv.length - 1], './env').VITE_SERVER_NAME
            }
    }

})

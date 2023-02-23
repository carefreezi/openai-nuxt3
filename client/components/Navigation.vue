<template>

    <a href="index.html" title="Postman" class="brand">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 46 46" fill="none">
            <g id="logo-icon-color">
                <path id="Vector"
                      d="M26.4966 6.01307V2.00436L22.9746 0L19.5029 2.00436V6.01307L22.9746 8.01743L26.4966 6.01307Z"
                      fill="#4539CF"/>
                <path id="Vector_2"
                      d="M34.7989 10.8235V6.81477L31.3272 4.81042L27.8555 6.81477V10.8235L31.3272 12.8279L34.7989 10.8235Z"
                      fill="#4539CF"/>
                <path id="Vector_3"
                      d="M43 15.4837V11.4749L39.5283 9.47058L36.0063 11.4749V15.4837L39.5283 17.488L43 15.4837Z"
                      fill="#4539CF"/>
                <path id="Vector_4"
                      d="M43 25.0043V20.9956L39.5283 18.9913L36.0063 20.9956V25.0043L39.5283 27.0087L43 25.0043Z"
                      fill="#4539CF"/>
                <path id="Vector_5"
                      d="M33.9935 19.9935V16.9368L31.3269 15.4336L28.6602 16.9368V19.9935L31.3269 21.5469L33.9935 19.9935Z"
                      fill="#4539CF"/>
                <path id="Vector_6"
                      d="M33.9935 29.5142V26.4575L31.3269 24.9041L28.6602 26.4575V29.5142L31.3269 31.0174L33.9935 29.5142Z"
                      fill="#4539CF"/>
                <path id="Vector_7"
                      d="M15.931 19.6928V17.2876L13.8178 16.085L11.7549 17.2876V19.6928L13.8178 20.8453L15.931 19.6928Z"
                      fill="#4539CF"/>
                <path id="Vector_8"
                      d="M15.931 29.1634V26.7582L13.8178 25.5555L11.7549 26.7582V29.1634L13.8178 30.366L15.931 29.1634Z"
                      fill="#4539CF"/>
                <path id="Vector_9"
                      d="M6.4717 24.0022V21.9978L4.76101 20.9956L3 21.9978V24.0022L4.76101 25.0044L6.4717 24.0022Z"
                      fill="#4539CF"/>
                <path id="Vector_10"
                      d="M43 34.4749V30.4662L39.5283 28.4619L36.0063 30.4662V34.4749L39.5283 36.4793L43 34.4749Z"
                      fill="#4539CF"/>
                <path id="Vector_11"
                      d="M25.9433 15.1329V11.8758L23.1257 10.2222L20.2578 11.8758V15.1329L23.1257 16.7865L25.9433 15.1329Z"
                      fill="#4539CF"/>
                <path id="Vector_12"
                      d="M25.9433 34.1242V30.8671L23.1257 29.2135L20.2578 30.8671V34.1242L23.1257 35.7778L25.9433 34.1242Z"
                      fill="#4539CF"/>
                <path id="Vector_13"
                      d="M25.4908 24.3529V21.597L23.126 20.244L20.7109 21.597V24.3529L23.126 25.756L25.4908 24.3529Z"
                      fill="#4539CF"/>
                <path id="Vector_14"
                      d="M34.7989 39.1852V35.1765L31.3272 33.1721L27.8555 35.1765V39.1852L31.3272 41.1896L34.7989 39.1852Z"
                      fill="#4539CF"/>
                <path id="Vector_15"
                      d="M16.6856 10.2222V6.91507L13.8176 5.26147L10.9497 6.91507V10.2222L13.8176 11.8257L16.6856 10.2222Z"
                      fill="#4539CF"/>
                <path id="Vector_16"
                      d="M6.22013 12.9782V11.1242L4.61006 10.1721L3 11.1242V12.9782L4.61006 13.9303L6.22013 12.9782Z"
                      fill="#4539CF"/>
                <path id="Vector_17"
                      d="M26.4966 43.9956V39.9868L22.9746 37.9825L19.5029 39.9868V43.9956L22.9746 45.9999L26.4966 43.9956Z"
                      fill="#4539CF"/>
                <path id="Vector_18"
                      d="M16.6856 39.0849V35.7777L13.8176 34.1241L10.9497 35.7777V39.0849L13.8176 40.7385L16.6856 39.0849Z"
                      fill="#4539CF"/>
                <path id="Vector_19"
                      d="M7.5283 34.8257V32.22L5.26415 30.9172L3 32.22V34.8257L5.26415 36.1285L7.5283 34.8257Z"
                      fill="#4539CF"/>
            </g>
        </svg>
    </a>

    <div class="nav flex-md-column nav-pills flex-grow-1" role="tablist" aria-orientation="vertical">
        <a class="mb-xl-3 mb-md-2 nav-link" data-toggle="pill" href="#nav-tab-user" role="tab">
            <img src="@/assets/images/user.png" class="avatar sm rounded-circle" alt="user avatar"/>
        </a>
        <a class="mb-xl-3 mb-md-2 nav-link active" data-toggle="pill" href="#nav-tab-chat" role="tab"><i
            class="zmdi zmdi-comment-alt"></i></a>

        <a class="mb-xl-3 mb-md-2 nav-link" data-toggle="pill" href="#nav-tab-contact" role="tab"><i
            class="zmdi zmdi-account-circle"></i></a>
        <a class="mb-xl-3 mb-md-2 nav-link d-none d-sm-block" data-toggle="pill" href="#nav-tab-pages"
           role="tab"><i class="zmdi zmdi-layers"></i></a>
    </div>

    <div @click="up_now()" class="nav flex-md-column nav-pills flex-grow-2" role="tablist" aria-orientation="vertical">

        <NuxtLink class="mt-xl-3 mt-md-2 nav-link d-none d-sm-block" to="#" role="tab"><i
            class="zmdi zmdi-settings"></i></NuxtLink>
    </div>

    <button type="submit" class="btn sidebar-toggle-btn shadow-sm"><i class="zmdi zmdi-menu"></i></button>

</template>
<script lang="ts" setup>
import {ref} from "vue";
import {ElMessage} from "element-plus";
const up_now = ()=>{
    ElMessage.warning('Coming Soon')
}
</script>

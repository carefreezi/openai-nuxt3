<template>
    <div class="authentication">
        <div class="container d-flex flex-column">
            <div class="row align-items-center justify-content-center no-gutters min-vh-100">
                <div class="col-12 col-md-7 col-lg-5 col-xl-4 py-md-11">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">

                            <h3 class="text-center">登录</h3>

                            <p class="text-center mb-6">登录自主用户，开始聊天</p>
                            <el-form
                                ref="ruleFormRef"
                                :model="ruleForm"
                                :rules="rules"
                                class="demo-ruleForm"
                                status-icon
                            >
                                <el-form-item prop="email">
                                    <div class="input-group">
                                        <input type="email" class="form-control form-control-lg"
                                               v-model="ruleForm.email"
                                               placeholder="输入你的邮箱">
                                    </div>
                                </el-form-item>
                                <el-form-item prop="password">
                                    <div class="input-group">
                                        <input type="password" class="form-control form-control-lg"
                                               v-model="ruleForm.password"
                                               placeholder="输入你的密码">
                                    </div>
                                </el-form-item>
                                <div class="form-group d-flex justify-content-between mb-4">
                                    <NuxtLink class="link" href="/users/reset">忘记密码</NuxtLink>
                                </div>
                                <el-form-item>
                                    <el-button :loading="login_loading" size="large" type="success" @click="submitForm(ruleFormRef)" class="login">
                                        登录
                                    </el-button>
                                </el-form-item>
                            </el-form>


                            <p class="text-center mb-0">还没有账户？ <NuxtLink class="link" to="/register">注册一个</NuxtLink>.</p>
                        </div>
                    </div>
                </div>
                <div class="signin-img d-none d-lg-block text-center">
                    <img src="@/assets/images/signin-img-cyan.svg" alt="Sign In Image"/>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">
import { reactive, ref } from 'vue'
import type { FormInstance, FormRules } from 'element-plus'
import { ElMessage } from 'element-plus'
definePageMeta({
    layout: false,
    middleware: ['auth']
})
const email = ref('')
const password = ref('')
const ruleFormRef = ref<FormInstance>()
const ruleForm = reactive({
    email: '',
    password: ''
})
const rules = reactive<FormRules>({
    email: [
        { required: true, message: '请输入邮箱', trigger: 'blur' },
        { type: 'email', message: '请输入正确的邮箱地址', trigger: ['blur', 'change'] }
    ],
    password: [
        { required: true, message: '请输入密码', trigger: 'blur' },
        { min: 6, max: 20, message: '密码长度在 6 到 20 个字符', trigger: 'blur' }
    ]
})
const login_loading = ref(false)
const token = useCookie('token')
const router = useRouter()
const submitForm = async (formEl: FormInstance | undefined) => {
    if (!formEl) return
    await formEl.validate((valid, fields) => {
        if (valid) {
            login_loading.value = true
            logins({
                email: ruleForm.email,
                password: ruleForm.password
            }).then((res:any) => {
                login_loading.value = false
                if (res._rawValue.status == 200) {
                    token.value = res._rawValue.token
                    ElMessage.success(res._rawValue.message)
                    router.push('/')
                }
            }).catch((err:any) => {
                login_loading.value = false
                ElMessage.error(err.message)
            })
        } else {
            console.log('error submit!', fields)
        }
    })
}

</script>

<style scoped>

</style>

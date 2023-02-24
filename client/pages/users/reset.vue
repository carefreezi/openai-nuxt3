<template>
    <div class="authentication">
        <div class="container d-flex flex-column">
            <div class="row align-items-center justify-content-center no-gutters min-vh-100">
                <div class="col-12 col-md-7 col-lg-5 col-xl-4 py-md-11">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">

                            <h3 class="text-center">Password Reset</h3>

                            <p class="text-center mb-6">Please enter your email address below to receive instructions
                                for resetting password.</p>

                            <form class="mb-4 mt-5">

                                <div class="input-group mb-2">
                                    <input type="email" class="form-control form-control-lg"
                                           placeholder="Enter your email">
                                </div>

                                <div class="text-center mt-4">
                                    <el-button type="success" class="reset" size="large">修改密码</el-button>
                                </div>
                            </form>

                            <p class="text-center mb-0">Already have an account? <NuxtLink class="link" to="/login">登录</NuxtLink>.</p>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">
definePageMeta({
    layout: false
})
</script>

<style scoped>

</style>

<template>
    <div class="sidebar border-end py-xl-4 py-3 px-xl-4 px-3">
        <div class="tab-content">

            <div class="tab-pane fade" id="nav-tab-user" role="tabpanel">

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="mb-0 text-primary">Profile</h3>
                    <div>
                        <a href="signin.html" title="" class="btn btn-dark">Sign Out</a>
                    </div>
                </div>

                <div class="form-group input-group-lg search mb-3">
                    <i class="zmdi zmdi-search"></i>
                    <input type="text" class="form-control" placeholder="Search...">
                </div>

                <div class="card border-0 text-center pt-3 mb-4">
                    <div class="card-body">
                        <div class="card-user-avatar">
                            <img src="@/assets/images/user.png" alt="avatar"/>
                            <button type="button" class="btn btn-secondary btn-sm"><i class="zmdi zmdi-edit"></i>
                            </button>
                        </div>
                        <div class="card-user-detail mt-4">
                            <h4>Michelle Green</h4>
                            <span class="text-muted"><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                        data-cfemail="15787c767d707979703b726770707b557278747c793b767a78">[email&#160;protected]</a></span>
                            <p>+14 123 456 789 - New york (USA)</p>
                            <div class="social">
                                <a class="icon p-2" href="#" data-toggle="tooltip" title="Facebook"><i
                                    class="zmdi zmdi-facebook-box"></i></a>
                                <a class="icon p-2" href="#" data-toggle="tooltip" title="Github"><i
                                    class="zmdi zmdi-github-box"></i></a>
                                <a class="icon p-2" href="#" data-toggle="tooltip" title="Linkedin"><i
                                    class="zmdi zmdi-linkedin-box"></i></a>
                                <a class="icon p-2" href="#" data-toggle="tooltip" title="Instagram"><i
                                    class="zmdi zmdi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card border-0">
                    <ul class="list-group custom list-group-flush">

                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>Color scheme</span>
                            <ul class="choose-skin list-unstyled mb-0">
                                <li data-theme="indigo" data-toggle="tooltip" title="Theme-Indigo">
                                    <div class="indigo"></div>
                                </li>
                                <li class="active" data-theme="cyan" data-toggle="tooltip" title="Theme-Cyan">
                                    <div class="cyan"></div>
                                </li>
                                <li data-theme="green" data-toggle="tooltip" title="Theme-Green">
                                    <div class="green"></div>
                                </li>
                                <li data-theme="blush" data-toggle="tooltip" title="Theme-Blush">
                                    <div class="blush"></div>
                                </li>
                                <li data-theme="dark" data-toggle="tooltip" title="Theme-Dark">
                                    <div class="dark"></div>
                                </li>
                            </ul>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>Desktop notifications</span>
                            <label class="c_checkbox">
                                <input type="checkbox" checked="">
                                <span class="checkmark"></span>
                            </label>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>Sound notifications</span>
                            <label class="c_checkbox">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </li>
                        <li class="list-group-item border-0 mt-3">
                            <a class="link" href="#"><i class="zmdi zmdi-chevron-right me-2"></i> Need Help? Let's
                                chat</a>
                        </li>
                        <li class="list-group-item border-0">
                            <a class="link" href="#"><i class="zmdi zmdi-chevron-right me-2"></i> Knowledgebase</a>
                        </li>
                        <li class="list-group-item border-0">
                            <a class="link" href="#"><i class="zmdi zmdi-chevron-right me-2"></i> english (United
                                States)</a>
                        </li>
                        <li class="list-group-item mb-3">
                            <a class="link" href="#"><i class="zmdi zmdi-chevron-right me-2"></i> Browser & App
                                Sessions</a>
                        </li>
                    </ul>

                    <div class="card-body text-center border-top">
                        <button type="button" class="btn btn-secondary">Update Profile</button>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade show active" id="nav-tab-chat" role="tabpanel">

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="mb-0 text-primary">Chat</h3>
                    <!--<div>-->
                    <!--    <button class="btn btn-dark" type="button">New Chat</button>-->
                    <!--</div>-->
                </div>

                <div class="form-group input-group-lg search mb-3">
                    <i class="zmdi zmdi-search"></i>
                    <input type="text" class="form-control" v-model="qs_input" @keydown.enter.native="qs_search" placeholder="Search...">
                </div>

                <ul class="chat-list">
                    <li class="header d-flex justify-content-between ps-3 pe-3 mb-1">
                        <span>RECENT CHATS</span>
                        <div class="dropdown">
                            <a @click="all_message()" class="btn btn-link px-1 py-0 border-0 text-muted dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-refresh"></i></a>
                        </div>
                    </li>
                    <li>
                        <div class="card" @click="check_message(0)">
                            <div class="card-body">
                                <div class="media">
                                    <div class="avatar me-3">
                                        <div class="avatar rounded-circle no-image bg-primary text-light">
                                            <span><i class="zmdi zmdi-comment-text"></i></span>
                                        </div>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <div class="d-flex align-items-center mb-1">
                                            <h6 class="text-truncate mb-0 me-auto">ChatGPT</h6>

                                        </div>
                                        <div class="text-truncate">
                                            <i class="zmdi zmdi-circle text-success"></i> Online
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <div class="bot_info">
                        <li class="online" :class="ms_active==item[item.length-1].session_id?'active':''"
                            v-for="(item,index) in messages" :key="index">
                            <div class="hover_action">

                                <!--<button type="button" class="btn btn-link text-warning"><i class="zmdi zmdi-star"></i>-->
                                <!--</button>-->
                                <button type="button" @click="delete_msg(item[item.length-1].session_id)" class="btn btn-link text-danger"><i class="zmdi zmdi-delete"></i>
                                </button>
                            </div>
                            <div class="card" @click="check_message(item[item.length-1].session_id)">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="avatar me-3">
                                            <span class="status rounded-circle"></span>
                                            <img class="avatar rounded-circle" src="@/assets/images/xs/avatar5.jpg"
                                                 alt="avatar">
                                        </div>
                                        <div class="media-body overflow-hidden">
                                            <div class="d-flex align-items-center mb-1">
                                                <h6 class="text-truncate mb-0 me-auto">{{
                                                        item[item.length - 1].question
                                                    }}</h6>
                                                <p class="small text-muted text-nowrap ms-4 mb-0">
                                                    {{ item[item.length - 1].created_at }}</p>
                                            </div>
                                            <div class="text-truncate">{{ item[item.length - 1].message }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </div>
                </ul>
            </div>
            <!--this is jiehu-->

            <!--this is change jiehu-->
        </div>

    </div>
    <div class="main px-3">
        <div class="chat-body" v-loading="loadins"
             :element-loading-spinner="svg"
             element-loading-svg-view-box="-10, -10, 50, 50"
        >

            <div class="chat-header border-bottom py-xl-4 py-md-3 py-2">
                <div class="container-xxl">
                    <div class="row align-items-center">

                        <div class="col-6 col-xl-4">
                            <div class="media">
                                <div class="avatar me-3" v-if="ms_active==0">
                                    <div class="avatar rounded-circle no-image bg-primary text-light">
                                        <span><i class="zmdi zmdi-comment-text"></i></span>
                                    </div>
                                </div>
                                <div class="me-3 show-user-detail" v-else>
                                    <span class="status rounded-circle"></span>
                                    <img class="avatar rounded-circle" src="@/assets/images/xs/avatar5.jpg" alt="avatar">
                                </div>
                                <div class="media-body overflow-hidden">
                                    <div class="d-flex align-items-center mb-1">
                                        <h6 class="text-truncate mb-0 me-auto" v-if="ms_active==0">ChatGPT</h6>
                                        <h6 class="text-truncate mb-0 me-auto" v-if="me_message.length>0">{{me_message[0].question}}</h6>
                                    </div>
                                    <div class="text-truncate"><i class="zmdi zmdi-circle text-success"></i> Online
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-xl-8 text-end">
                        </div>
                    </div>
                </div>
            </div>

            <div class="collapse" id="chat-search-div">
                <div class="container-xxl py-2">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Find messages in current conversation">
                        <div class="input-group-append">
                            <span class="input-group-text text-muted">0 / 0</span>
                        </div>
                        <div class="input-group-append">
                            <button type="button" class="btn btn-secondary">Search</button>
                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right shadow border-0">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div role="separator" class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="chat-content">
                <div class="container-xxl">
                    <ul class="list-unstyled py-4">
                        <!--bot guan-->
                        <div class="bot_message_s" v-if="ms_active==0">
                            <li class="d-flex message">

                                <div class="mr-lg-3 me-2">
                                    <div
                                        class="avatar sm rounded-circle bg-primary d-flex align-items-center justify-content-center">
                                        <span><i class="zmdi zmdi-comment-text text-light"></i></span>
                                    </div>
                                </div>

                                <div class="message-body">

                                    <div class="message-row d-flex align-items-center">
                                        <div class="message-content p-3">
                                            🙌 欢迎回来!<br>
                                            有什么可以帮助您? 🤖
                                        </div>
                                    </div>

                                    <div class="message-row d-flex align-items-center">
                                        <div class="message-content p-3">
                                            👋 您好，我是您的专属机器人.<br> 如果你对我们的工具有任何疑问，请告诉我
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li class="d-flex message">

                                <div class="mr-lg-3 me-2">
                                    <div
                                        class="avatar sm rounded-circle bg-primary d-flex align-items-center justify-content-center">
                                        <span><i class="zmdi zmdi-comment-text text-light"></i></span>
                                    </div>
                                </div>

                                <div class="message-body">

                                    <div class="message-row d-flex align-items-center">
                                        <div class="card rounded-3">
                                            <div class="card-body">
                                                <h5 class="card-title">同步上线小程序！</h5>
                                                <img src="https://nsmao.oss-cn-shanghai.aliyuncs.com/202302/16/DqxNQdtwQhnIZJeMFhLcnSlnMU2kykFHBwdunaZR.jpg" class="cover">
                                                <p class="card-text">在此区域提交的问题会生成新的会话!</p>
                                            </div>
                                            <div class="card-body">
                                                <NuxtLink to="/login" class="card-link">✨ 登录!</NuxtLink>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </div>

                        <!--bot guan end-->

                        <!--qs-->

                        <div class="message_s" v-for="(item,index) in me_message" :key="index">
                            <li class="d-flex message right">
                                <div class="message-body">
                                <span class="date-time text-muted">{{ item.created_at }}<i
                                    class="zmdi zmdi-check-all text-primary"></i></span>
                                    <div class="message-row d-flex align-items-center justify-content-end">
                                        <div class="message-content border p-3">
                                            {{ item.question }}
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="d-flex message">

                                <div class="mr-lg-3 me-2">
                                    <img class="avatar sm rounded-circle" src="@/assets/images/xs/avatar5.jpg"
                                         alt="avatar">
                                </div>

                                <div class="message-body">
                                    <span class="date-time text-muted">{{ item.created_at }}</span>
                                    <div class="message-row d-flex align-items-center">

                                        <div class="message-content p-3" v-html="item.message.replace(/\n/g, '<br />')">
                                        </div>


                                    </div>
                                </div>
                            </li>

                        </div>
                        <!--qs end-->
                    </ul>
                </div>
            </div>

            <div class="chat-footer border-top py-xl-4 py-lg-2 py-2">
                <div class="container-xxl">
                    <div class="row">
                        <div class="col-12">
                            <el-form
                                ref="ruleFormRef"
                                :model="ruleForm"
                                :rules="rules"
                                class="demo-ruleForm"
                                status-icon
                            >
                                <el-col :span="22">
                                    <el-form-item prop="message_input">
                                        <el-input
                                            size="large"
                                            :disabled="send_loading"
                                            class="form-control border-0 pl-0"
                                                   v-model="ruleForm.message_input" autocomplete="off"
                                                   placeholder="请输入提问内容"
                                                   @keydown.enter.native="submitForm(ruleFormRef)"
                                        />
                                    </el-form-item>
                                    <el-form-item style="margin-bottom:0;display:none;">
                                        <el-input></el-input>
                                    </el-form-item>
                                </el-col>

                                <el-col :span="2">
                                    <el-form-item>
                                        <el-button size="large" type="success" @click="submitForm(ruleFormRef)" :loading="send_loading"
                                        >发送
                                        </el-button>
                                    </el-form-item>
                                </el-col>

                            </el-form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="user-detail-sidebar py-xl-4 py-3 px-xl-4 px-3">
            <div class="d-flex flex-column">
                <div class="header border-bottom pb-4 d-flex justify-content-between">
                    <div>
                        <h6 class="mb-0 font-weight-bold">User Details</h6>
                        <span class="text-muted">Update your profile details</span>
                    </div>
                    <div>
                        <button class="btn btn-link text-muted close-chat-sidebar" type="button"><i
                            class="zmdi zmdi-close"></i></button>
                    </div>
                </div>
                <div class="body mt-4">
                    <div class="d-flex justify-content-center">
                        <div class="avatar xxl">
                            <img class="avatar xxl rounded-circle" src="@/assets/images/sm/avatar2.jpg" alt="avatar">
                        </div>
                    </div>
                    <div class="text-center mt-3 mb-5">
                        <h4>Jason Porter</h4>
                        <span class="text-muted"><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="0f62666c676a63636a21687d6a6a614f68626e6663216c6062">[email&#160;protected]</a></span>
                        <p>+14 123 456 789 - New york (USA)</p>
                    </div>

                    <ul class="chat-list">
                        <li class="header d-flex justify-content-between ps-3 pe-3 mb-1">
                            <span>mutual friend</span>
                        </li>
                        <li>
                            <a href="#" class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="avatar me-3">
                                            <img class="avatar rounded-circle" src="@/assets/images/xs/avatar1.jpg"
                                                 alt="avatar">
                                        </div>
                                        <div class="media-body overflow-hidden">
                                            <div class="d-flex align-items-center mb-1">
                                                <h6 class="text-truncate mb-0 me-auto">Michelle Green</h6>
                                            </div>
                                            <div class="text-truncate">+14 123 456 258</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="avatar me-3">
                                            <img class="avatar rounded-circle" src="@/assets/images/xs/avatar2.jpg"
                                                 alt="avatar">
                                        </div>
                                        <div class="media-body overflow-hidden">
                                            <div class="d-flex align-items-center mb-1">
                                                <h6 class="text-truncate mb-0 me-auto">Jason Porter</h6>
                                            </div>
                                            <div class="text-truncate">+14 123 456 963</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="avatar me-3">
                                            <img class="avatar rounded-circle" src="@/assets/images/xs/avatar3.jpg"
                                                 alt="avatar">
                                        </div>
                                        <div class="media-body overflow-hidden">
                                            <div class="d-flex align-items-center mb-1">
                                                <h6 class="text-truncate mb-0 me-auto">Elizabeth Martin</h6>
                                            </div>
                                            <div class="text-truncate">+14 123 456 753</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="addnew-user-sidebar py-xl-4 py-3 px-xl-4 px-3">
            <div class="d-flex flex-column">
                <div class="header border-bottom pb-4 d-flex justify-content-between">
                    <div>
                        <h6 class="mb-0 font-weight-bold">Add new member</h6>
                        <span class="text-muted">Update your profile details</span>
                    </div>
                    <div>
                        <button class="btn btn-link text-muted close-chat-sidebar" type="button"><i
                            class="zmdi zmdi-close"></i></button>
                    </div>
                </div>
                <div class="body mt-4">

                    <div class="form-group input-group-lg search mb-3">
                        <i class="zmdi zmdi-search"></i>
                        <input type="text" class="form-control" placeholder="Search...">
                    </div>

                    <ul class="chat-list">
                        <li class="header d-flex justify-content-between ps-3 pe-3 mb-1">
                            <span>A</span>
                            <div class="dropdown">
                                <a class="btn btn-link px-1 py-0 border-0 text-muted dropdown-toggle" href="#"
                                   role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="hover_action">
                                <button type="button" class="btn btn-link text-info"><i
                                    class="zmdi zmdi-plus-circle"></i>
                                </button>
                            </div>
                            <a href="#" class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="avatar me-3">
                                            <img class="avatar rounded-circle" src="@/assets/images/xs/avatar1.jpg"
                                                 alt="avatar">
                                        </div>
                                        <div class="media-body overflow-hidden">
                                            <div class="d-flex align-items-center mb-1">
                                                <h6 class="text-truncate mb-0 me-auto">Amelia Green</h6>
                                            </div>
                                            <div class="text-truncate">
                                                last seen 2 hours ago
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="hover_action">
                                <button type="button" class="btn btn-link text-info"><i
                                    class="zmdi zmdi-plus-circle"></i>
                                </button>
                            </div>
                            <a href="#" class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="avatar me-3">
                                            <img class="avatar rounded-circle" src="@/assets/images/xs/avatar3.jpg"
                                                 alt="avatar">
                                        </div>
                                        <div class="media-body overflow-hidden">
                                            <div class="d-flex align-items-center mb-1">
                                                <h6 class="text-truncate mb-0 me-auto">Ava Green</h6>
                                            </div>
                                            <div class="text-truncate">
                                                last seen 1 hours ago
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="header d-flex justify-content-between ps-3 pe-3 mb-1">
                            <span>C</span>
                        </li>
                        <li>
                            <div class="hover_action">
                                <button type="button" class="btn btn-link text-info"><i
                                    class="zmdi zmdi-plus-circle"></i>
                                </button>
                            </div>
                            <a href="#" class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="avatar me-3">
                                            <img class="avatar rounded-circle" src="@/assets/images/xs/avatar4.jpg"
                                                 alt="avatar">
                                        </div>
                                        <div class="media-body overflow-hidden">
                                            <div class="d-flex align-items-center mb-1">
                                                <h6 class="text-truncate mb-0 me-auto">Charlotte Green</h6>
                                            </div>
                                            <div class="text-truncate">
                                                last seen 6 hours ago
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="hover_action">
                                <button type="button" class="btn btn-link text-info"><i
                                    class="zmdi zmdi-plus-circle"></i>
                                </button>
                            </div>
                            <a href="#" class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="avatar me-3">
                                            <img class="avatar rounded-circle" src="@/assets/images/xs/avatar5.jpg"
                                                 alt="avatar">
                                        </div>
                                        <div class="media-body overflow-hidden">
                                            <div class="d-flex align-items-center mb-1">
                                                <h6 class="text-truncate mb-0 me-auto">Chloe Green</h6>
                                            </div>
                                            <div class="text-truncate">
                                                last seen 3 hours ago
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="hover_action">
                                <button type="button" class="btn btn-link text-info"><i
                                    class="zmdi zmdi-plus-circle"></i>
                                </button>
                            </div>
                            <a href="#" class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="avatar me-3">
                                            <img class="avatar rounded-circle" src="@/assets/images/xs/avatar6.jpg"
                                                 alt="avatar">
                                        </div>
                                        <div class="media-body overflow-hidden">
                                            <div class="d-flex align-items-center mb-1">
                                                <h6 class="text-truncate mb-0 me-auto">Charles Green</h6>
                                            </div>
                                            <div class="text-truncate">
                                                last seen 2 hours ago
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="header d-flex justify-content-between ps-3 pe-3 mb-1">
                            <span>D</span>
                        </li>
                        <li>
                            <div class="hover_action">
                                <button type="button" class="btn btn-link text-info"><i
                                    class="zmdi zmdi-plus-circle"></i>
                                </button>
                            </div>
                            <a href="#" class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="avatar me-3">
                                            <img class="avatar rounded-circle" src="@/assets/images/xs/avatar4.jpg"
                                                 alt="avatar">
                                        </div>
                                        <div class="media-body overflow-hidden">
                                            <div class="d-flex align-items-center mb-1">
                                                <h6 class="text-truncate mb-0 me-auto">David Green</h6>
                                            </div>
                                            <div class="text-truncate">
                                                last seen 6 hours ago
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="header d-flex justify-content-between ps-3 pe-3 mb-1">
                            <span>M</span>
                        </li>
                        <li>
                            <div class="hover_action">
                                <button type="button" class="btn btn-link text-info"><i
                                    class="zmdi zmdi-plus-circle"></i>
                                </button>
                            </div>
                            <a href="#" class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="avatar me-3">
                                            <img class="avatar rounded-circle" src="@/assets/images/xs/avatar8.jpg"
                                                 alt="avatar">
                                        </div>
                                        <div class="media-body overflow-hidden">
                                            <div class="d-flex align-items-center mb-1">
                                                <h6 class="text-truncate mb-0 me-auto">Michael Green</h6>
                                            </div>
                                            <div class="text-truncate">
                                                last seen 6 hours ago
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="hover_action">
                                <button type="button" class="btn btn-link text-info"><i
                                    class="zmdi zmdi-plus-circle"></i>
                                </button>
                            </div>
                            <a href="#" class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="avatar me-3">
                                            <img class="avatar rounded-circle" src="@/assets/images/xs/avatar8.jpg"
                                                 alt="avatar">
                                        </div>
                                        <div class="media-body overflow-hidden">
                                            <div class="d-flex align-items-center mb-1">
                                                <h6 class="text-truncate mb-0 me-auto">Mohammad</h6>
                                            </div>
                                            <div class="text-truncate">
                                                last seen 6 hours ago
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="header d-flex justify-content-between ps-3 pe-3 mb-1">
                            <span>T</span>
                        </li>
                        <li>
                            <div class="hover_action">
                                <button type="button" class="btn btn-link text-info"><i
                                    class="zmdi zmdi-plus-circle"></i>
                                </button>
                            </div>
                            <a href="#" class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="avatar me-3">
                                            <img class="avatar rounded-circle" src="@/assets/images/xs/avatar9.jpg"
                                                 alt="avatar">
                                        </div>
                                        <div class="media-body overflow-hidden">
                                            <div class="d-flex align-items-center mb-1">
                                                <h6 class="text-truncate mb-0 me-auto">Tommy Green</h6>
                                            </div>
                                            <div class="text-truncate">
                                                last seen 6 hours ago
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>
<script lang="ts" setup>
import {ref} from 'vue'
import {ElMessage,ElMessageBox} from 'element-plus'
import type { FormInstance, FormRules } from 'element-plus'

const token = useCookie('token')
const router = useRouter();
const messages = ref([])
const ms_active = ref(0)
const me_message = ref([]) as any
const loadins = ref(false)
const send_loading = ref(false)

// 请求左侧列表
const all_message = () => {
    get_message().then((res: any) => {
        messages.value = res._rawValue.data
    }).catch((err: any) => {
        console.log(err)
    })
}
all_message()

// 单独请求聊天记录
const check_message = (id: number) => {
    ms_active.value = id
    loadins.value = true
    c_message({
        session_id: id,
    }).then((res: any) => {
        me_message.value = res._rawValue.data
        loadins.value = false
        down_message()
    }).catch((err: any) => {
        loadins.value = false
        ElMessage.error(err.message)
    })
}

const down_message = () => {
    setTimeout(() => {
        let chat = document.getElementsByClassName('chat-content')[0]
        chat.scrollTop = chat.scrollHeight
    }, 100)
}
// 发送消息
const ruleFormRef = ref<FormInstance>()
const ruleForm = reactive({
    message_input:'',
})

const rules = reactive<FormRules>({
    message_input: [
        {required: true, message: '请输入内容', trigger: 'blur'},
    ],
})

const submitForm = async (formEl: FormInstance | undefined) => {
    if (!formEl) return
    await formEl.validate((valid, fields) => {
        if (valid) {
            if (!token.value) {
                ElMessage.warning('请先登录')
                router.push({path: "/login"})
            }
            send_loading.value = true
            me_message.value.push({
                "session_id": ms_active.value,
                "question": ruleForm.message_input,
                "message": "AI智能加载中...",
            })
            down_message()
            send({
                info: ruleForm.message_input,
                session_id: ms_active.value
            }).then((res: any) => {
                all_message()
                check_message(ms_active.value)
                send_loading.value = false
                ruleForm.message_input = ''
            }).catch((err: any) => {
                send_loading.value = false
                ElMessage.error(err.message)
            })
        } else {
            console.log('error submit!', fields)
        }
    })
}
const qs_input = ref('')
const qs_search = ()=>{
    if (!qs_input.value) {
        ElMessage.warning('请输入内容')
        return
    }
    searchs({
        search:qs_input.value
    }).then((res: any) => {
        messages.value = res._rawValue.data
        ElMessage.success('搜索完成')
    }).catch((err: any) => {
        ElMessage.error(err.message)
    })
}

const delete_msg = (id: number) => {
    ElMessageBox.confirm('此操作将永久删除该会话, 是否继续?', '提示', {
        confirmButtonText: '确定',
        cancelButtonText: '取消',
        type: 'warning'
    }).then(() => {
        del_msg({
            session_id: id,
        }).then((res: any) => {
            ElMessage.success('删除成功')
            all_message()
        }).catch((err: any) => {
            ElMessage.error(err.message)
        })
    }).catch(() => {
        ElMessage.info('已取消删除')
    })
}
const svg = `<svg t="1676476270524" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="8294" width="32" height="32"><path d="M510.5 958.7c-60.4 0-119-11.8-174.2-35.2-53.3-22.5-101.1-54.8-142.2-95.9s-73.3-88.9-95.9-142.2C74.9 630.2 63 571.6 63 511.2s11.8-119 35.2-174.2c22.5-53.3 54.8-101.1 95.9-142.2S283 121.5 336.3 99c55.2-23.3 113.8-35.2 174.2-35.2 49.3 0 97.8 8 144.1 23.7 26.1 8.9 40.1 37.3 31.2 63.4-7.1 20.8-26.5 33.9-47.3 33.9-5.3 0-10.8-0.9-16.1-2.7-35.9-12.2-73.6-18.4-111.9-18.4-92.8 0-180 36.1-245.7 101.8C199.2 331.1 163 418.4 163 511.2c0 92.8 36.1 180 101.8 245.7 65.6 65.6 152.9 101.8 245.7 101.8s180-36.1 245.7-101.8C821.8 691.3 858 604 858 511.2c0-58.6-14.9-116.6-43-167.6-13.3-24.2-4.6-54.6 19.6-67.9 24.2-13.3 54.6-4.6 67.9 19.6 36.3 65.7 55.4 140.4 55.4 215.9 0 60.4-11.8 119-35.2 174.2-22.5 53.3-54.8 101.1-95.9 142.2-41.1 41.1-88.9 73.3-142.2 95.9-55.1 23.3-113.7 35.2-174.1 35.2z" p-id="8295" fill="#00c98d"></path></svg>
      `
</script>

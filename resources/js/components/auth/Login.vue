<template>
    <section class="login">
        <div class="login-box">
            <div class="login-logo">
                <a href="#"><b>QR Generate</b></a>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Sign in to start your session</p>

                    <form  @submit.prevent="login">
                        <div class="input-group mb-3">
                            <input type="text" v-model="user_id" class="form-control" placeholder="User ID">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" v-model="password" class="form-control" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="remember">
                                    <label for="remember">
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                    <!-- <div class="social-auth-links text-center mb-3">
                        <p>- OR -</p>
                        <a href="#" class="btn btn-block btn-primary">
                            <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                        </a>
                        <a href="#" class="btn btn-block btn-danger">
                            <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                        </a>
                    </div> -->
                    <!-- /.social-auth-links -->

                    <p class="mb-1">
                        <a href="forgot-password.html">I forgot my password</a>
                    </p>
                    <p class="mb-0">
                        <a href="register.html" class="text-center">Register a new membership</a>
                    </p>
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
    </section>
</template>
<script>
import { log } from "util";
export default {
  data(){
    return {
        url: window.location.origin,
        user_id:"",
        password:"",
        errorMsg:""
    }
  },
  created(){
      console.log(this.$store.getters.isLogged);
  },
  methods:{
      login(){
          this.$store
          .dispatch('login', {
              user_id: this.user_id,
              password: this.password
          }).then(() => {
            //   this.$router.push({name:"Home"})
            
          }).catch(error => {
              if(error.response.status == 404){
                  this.errorMsg = error.response.data

              } else if(error.response.status == 401){
                  this.errorMsg = error.response.data
              } else {

              }
          })
      }
  }
}
</script>

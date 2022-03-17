<template>
   <section class="master">  
    <Navbar v-if="status"></Navbar>
  <!-- Content Wrapper. Contains page content -->
  <div :class="wrapperClass">
    <!-- Content Header (Page header) -->
   <PageHeader v-if="status"></PageHeader>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          <router-view key="this.$router.fullPath"></router-view>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer" v-if="status">
    <strong>Copyright &copy; 2020 <a href="#">JOY TECH</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 2.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
   </section>
</template>
<script>
export default {
 data(){
   return{
     wrapperClass:"",
     currRoute:this.$router.currentRoute.name,
     status:true
   }
 }, 
 created(){
   this.contentWrapperClass()
   this.showComponent()
   this.htmlBodyClass()
   console.log(this.$store.getters.isLogged);
 },
 methods:{
   contentWrapperClass(){
     if(this.currRoute == 'SignIn' || this.currRoute == 'Register'){
       this.wrapperClass = ""
     } else{
      this.wrapperClass =  "content-wrapper"
     }
   },

   htmlBodyClass(){
     if(this.currRoute == 'SignIn'){
       $('body').removeClass('sidebar-mini layout-fixed')
       $('body').addClass('hold-transition login-page')
     }
   },
   showComponent(){
     console.log(this.currRoute);
     if(this.currRoute == 'SignIn' || this.currRoute == 'Register'){
       this.status = false
     }
   }
 }
}
</script>
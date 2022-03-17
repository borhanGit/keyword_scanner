<template>
    <section class="admin-profile">
        <form class="form" @submit.prevent="processData()">
            <div class="row" style="margin-top:-20px;">
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{ cardTitle }}</h3>
                        </div>
                        <div class="card-body">
                           <div class="row">
                                <div class="col-md-6">
                                <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name" v-model="inputData.name" placeholder="e.g. Mohammad Ali">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" class="form-control" name="email" v-model="inputData.email" placeholder="e.g. mohammadali@mail.com">
                            </div>
                            <div class="form-group">
                                <label for="">Mobile Number</label>
                                <input type="text" class="form-control" name="phone" v-model="inputData.mobile_no" placeholder="e.g. 01749xxxxxx">
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="">Role</label>
                                <input type="text" class="form-control" name="role" v-model="inputData.role" placeholder="e.g. Admin" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">User ID</label>
                                <input type="text" class="form-control" name="user_id" v-model="inputData.user_id" placeholder="e.g. admin" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="text" v-model="inputData.password" class="form-control" placeholder="********">
                            </div>
                            </div>
                           </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-sm btn-primary float-right">Update</button>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </section>
</template>
 
<script>
    import mixin from '../../../src/mixin';
    export default {
        mixins:[mixin],
        created(){
            this.isEdit = true
            this.isSamePage = true
            this.cardTitle = this.isEdit?'Edit Profile':''
            this.generalApi = 'admin-profile'
            
        },
        mounted(){
            
        }
    }

</script>

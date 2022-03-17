<template>
    <div>
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
                                        <label for="">Category</label>
                                        <input type="hidden" name="category_id" v-model="inputData.category_id">
                                       <v-select :options="categories" :reduce="category => category.id" label="category_name" v-model="inputData.category_id" placeholder="Select Category"></v-select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Sub Category Name</label>
                                        <input type="text" name="sub_category_name" v-model="inputData.sub_category_name" class="form-control"
                                            placeholder="">

                                    </div>
                                    
                    
                                </div><!--col-6 end-->
                                <div class="col-md-6">      
                                                        
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <input type="hidden" name="status" v-model="inputData.status">
                                       <v-select :options="status" :reduce="statu => statu.value" label="name" v-model="inputData.status" placeholder="Select Status"></v-select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Sub Category Description</label>
                                        <textarea  name="description" v-model="inputData.description" class="form-control"></textarea>
                                      
                                    </div>
                                    <!-- <div class="form-group">
                                        <label for="">Team</label>
                                        <input type="hidden" name="team" v-model="inputData.team">
                                       <v-select :options="teams" :reduce="team => team.name" label="name" v-model="inputData.team" placeholder="Select Team"></v-select>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <FormButton :isEdit="isEdit" :backUrl="backUrl"></FormButton>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>
</template>

<script>
    import mixin from '../../../js/src/mixin';
    export default {
        mixins: [mixin],
        data(){
            return {
                status:[
                    {name:'Active',value:1},
                    {name:'Inactive',value:0}
                ],
                categories:[]
            }
        },
        created() {
            this.generalApi = 'sub-category'
            this.backUrl = '/sub-category'
            this.cardTitle = this.isEdit ? 'Edit Sub Category' : 'Add Sub Category'

            axios.get(this.url+'/api/'+this.generalApi)
            .then(res => {
                this.categories   = res.data.categories
                console.log(res.data.categories);
                
            })
        },


    }

</script>

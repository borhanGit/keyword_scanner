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
                                        <label for="">Unit Name</label>
                                        <input type="text" name="unit_name" v-model="inputData.unit_name" class="form-control"
                                            placeholder="">

                                    </div>
                                    <div class="form-group">
                                        <label for="">Unit Description</label>
                                        <textarea  name="description" v-model="inputData.description" class="form-control"></textarea>
                                      
                                    </div>
                    
                                </div><!--col-6 end-->
                                <div class="col-md-6">                          
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <input type="hidden" name="status" v-model="inputData.status">
                                       <v-select :options="status" :reduce="statu => statu.value" label="name" v-model="inputData.status" placeholder="Select Status"></v-select>
                                    </div>
                                    
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
                teams:[]
            }
        },
        created() {
            this.generalApi = 'units'
            this.backUrl = '/units'
            this.cardTitle = this.isEdit ? 'Edit Unit' : 'Add Unit'

            // axios.get(this.url+'/api/'+this.generalApi)
            // .then(res => {
                
            // })
        },


    }

</script>

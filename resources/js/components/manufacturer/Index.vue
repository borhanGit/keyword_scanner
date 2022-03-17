<template>            <!-- /.card-header -->
    <TableContent  style="margin-top:-20px;"  v-if="typeof(dataList) == 'object'" :searchForm="searchForm" :sortingForm="sortingForm" :isAddItem="isAddItem" :isEditBtn="isEditBtn" :isDelBtn="isDelBtn" :isActionBtn="isActionBtn" :cardTitle="cardTitle" :columnsHead="columnsHead" :columnsBody="columnsBody" :dataList="dataList" :showEditForm="showEditForm" :deleteItem="deleteItem" :getDataList="getDataList" :excelFields="excelFields" :excelTitle="excelTitle" :isDownload="isDownload" :isSearchBox="isSearchBox" route="admin"></TableContent>
</template>
<script>
import mixin from '../../../js/src/mixin';
export default {
    mixins:[mixin],
    data(){
        return {

        }
    },
    created(){
        this.generalApi = "manufacturer"
        this.cardTitle ="Manufacturer List"
        this.columnsHead.push('ID','Manufacturer Name','Description', 'Status', 'Photo','Action')
        this.columnsBody.push('manufacturer_name','description', 'statusText', 'image_name')
        // this.columnsBodyExtra = 
        this.isDownload=false;
            
    }, 
   
}
</script>

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
        this.generalApi = "units"
        this.cardTitle ="Unit List"
        this.columnsHead.push('ID','Unit Name', 'Description', 'Status', 'Action')
        this.columnsBody.push('unit_name', 'description', 'statusText')
        // this.columnsBodyExtra = 
        this.isDownload=false;
            
    }, 
   
}
</script>

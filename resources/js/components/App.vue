<template>
    <div class="container">
        <h3 class="header">ProSpark Serverside Filtering</h3>
        <hr>
        <!-- Wrapped datatables plugin with ajax serverside procedure -->
        <data-table></data-table>
    </div>
</template>

<script>
    import DataTable from './DataTable.vue'
    export default {
        components:{
            DataTable
        },
    }
</script>

<style lang="scss" scoped>
    .header{
        width: 100%; 
        margin: 20px 0; 
        text-align: center;
    }
</style>
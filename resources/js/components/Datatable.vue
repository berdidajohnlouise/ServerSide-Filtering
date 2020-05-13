<template>
    <div class="panel panel-primary">

      <div class="panel-body">

          <table class="table table-bordered" id="user-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
          </table>

     </div>

    </div>
</template>

<script>
export default {
    mounted(){
        // Extract datatables data on children life cycle
        $('#user-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '/users',
            stateSave: true,
            columns: [
                { data: 'id', name: 'id'},
                { data: 'name', name: 'name'},
                { data: 'email', name: 'email',}
            ],
            
        })
    }
}
</script>
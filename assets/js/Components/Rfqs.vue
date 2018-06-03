<template>
  <div class="container">
      <div class="row">>
      <h1>Dashboard</h1>
        <h2>Request for Quotation List</h2>
          <table class="table table-striped">
            <thead>
            <tr>
            <th>Company Name</th>
            <th>RFQ Name</th>
            <th>Parts</th>
            <th>Quantity</th>
            <th>Deadline</th>
            <th>Status</th>
            </tr>
            </thead>
                <tbody>
                <tr v-for="rfq in rfqs" v-bind:key="rfq.id">
                  <td>{{ rfq.company_name }}</td>
                  <td>{{ rfq.rfq_name }}</td>
                  <td>{{ rfq.parts }}</td>
                  <td>{{ rfq.quantity }}</td>
                  <td>{{ rfq.deadline }}</td>
                  <td>{{ rfq.status }}</td>
                </tr>
                </tbody>
          </table>
      </div>
  </div>
</template>

<script>
export default {
  name: "rfqs",
  data() {
    return {
      rfqs: [],
      rfq: {
        id: '',
        company_name: '',
        rfq_name: '',
        parts:'',
        quantity:'',
        deadline:'',
        status:''
      },
      rfq_id: ''
    };
  },
  created() {
    this.fetchRfqs();
  },
  methods: {
    fetchRfqs(page_url) {
      page_url = '/api/rfq/fetch';
      fetch(page_url)
        .then(res => res.json())
        .then(res => {
          this.rfqs = res.data;
        })
        .catch(err => console.log(err));
    }
  }
};
</script>
<style scoped>
</style>

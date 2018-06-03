<template>
      <div>
      <div>
          <p>This is an footer of a new components in VueJs</p>
      </div>
          <div class="container">
              <div class="row">
                  <div id="footer-copyright" class="col-md-6">
                      <p>&copy; {{ 'now'|date('Y') }} - The Price Hub</p>
                      <p>{{ 'General Terms and Conditions of Sales'|trans }}</p>
                  </div>
                  <div id="footer-resources" class="col-md-6">
                      <p>
                              <i class="fa fa-phone" aria-hidden="true"></i>
                              +33123456789
                          </p>
                          <p>
                              <i class="fa fa-email" aria-hidden="true"></i>
                                tph@contact.info
                          </p>

                  </div>
              </div>
          </div>
      </div>
</template>

<script>
   export default {
       name: "App"
   }
</script>

<style scoped>

</style>

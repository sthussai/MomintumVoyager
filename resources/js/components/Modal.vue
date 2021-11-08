<template>

      <!-- The Modal -->
<div class="w3-modal-content w3-animate-top w3-card-4">
        <header class="w3-container w3-blue-grey">
          <h2 class='w3-padding'>Update User Information</h2>
        </header>
        <div id="modalContainter" class="w3-container">


        </div>
        <div class="w3-container w3-padding w3-blue-grey">

        </div>
      </div>
      <!--              END modal section -->

</template>

<script>
export default {
          mounted() {
            console.log('Component mounted.')
        },
 data() {
   return {
     showModal: true
   }
 },
}
</script>
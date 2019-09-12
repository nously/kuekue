<template>
    <div class="container">
        <div class="ui star rating" data-rating="3"></div>
    </div>
</template>

<script>
    export default {
        mounted() {
            $(document).ready(function(){
                $(".ui.rating").rating();
            });
        },
    }
</script>

<template>
    <div>
        <div class="ui mini heart rating" data-rating="4" data-max-rating="5"></div>
    </div>
</template>

<script>
    export default {
        mounted() {
            $(document).ready(function(){
                $(".ui.rating").rating('disable');
            });
        },
    }
</script>

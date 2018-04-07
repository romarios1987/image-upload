<template>
    <!--<form action="{{route('upload')}}" enctype="multipart/form-data" method="post">-->


    <div>
        <input type="file" name="image">
        <img src="" alt="Image">
        <a href="#" class="btn btn-success" @click.prevent="upload">Upload</a>
    </div>

    <!--</form>-->
</template>

<script>
    export default {
        name: "UploadForm",
        methods: {
            upload() {
                axios.post('/upload')
            }
        }
    }
</script>

<style scoped>

</style>
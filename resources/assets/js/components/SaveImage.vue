<template>
    <div>
        <input type="file" name="image" @change="GetImage" accept="image/*">
        <img :src="avatar" alt="Image">
        <a href="#" v-if="loaded" class="btn btn-success" @click.prevent="upload">Upload</a>
        <a href="#" v-if="loaded" class="btn btn-danger" @click.prevent="cancel">Cancel</a>
    </div>
</template>

<script>
    export default {

        props: ['user'],

        data() {
            return {
                avatar: `storage/${this.user.image}`,
                loaded: false,
                file: null
            }
        },
        methods: {
            GetImage(e) {
                let image = e.target.files[0];
                this.read(image);
                let form = new FormData();
                form.append('image', image);
                this.file  = form;

            },
            upload() {
                axios.post('/saveImage', this.file)
                    .then(res => {
                        this.$toasted.show('Avatar is uploaded !',
                            {type: 'success'});
                        this.loaded = false
                        }
                    )
            },
            read(image) {
                let reader = new FileReader();
                reader.readAsDataURL(image);
                reader.onload = e => {
                    this.avatar = e.target.result
                };

                this.loaded = true;
            },
            cancel() {
                this.avatar = this.user.avatar;
                this.loaded = false
            }
        }

    }
</script>

<style scoped>

</style>
<template>
    <div>
        <div v-for="certificate in certificates">
            <div class="bg-secondary p-3 mb-3 rounded">
                <div class="row">
                    <div class="col-sm-2">
                        <img src="laurel.png" alt="" height="50" width="50">
                    </div>
                    <div class="col-sm-7">
                        <p>{{certificate.name}}</p>
                    </div>
                    <div class="col-sm-2">
                        <button type="button" class="btn btn-success">Download</button>
                    </div>
                </div>
                <p class="offset-2">{{certificate.author}}</p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {

        },
        data() {
            return {
                certificates: []
            };
        },
        created(){
            this.fetchCertificates();
        },
        methods: {
            fetchCertificates(){
                fetch('api/certificates').then(res => res.json()).then(res => {
                    console.log(res);
                    this.certificates = res;
                })
            }

        }
    }

</script>
{{--<script>--}}
{{--new Vue({--}}
{{--    el : '#app1',--}}
{{--    data :--}}
{{--    {--}}
{{--        showModal : false,--}}
{{--        user_id : 'null',--}}
{{--    },--}}

{{--    methods:{--}}
{{--        changeStatus:function()--}}
{{--        {--}}
{{--            let selectStatus = document.getElementById("select-status").value;--}}
{{--            --}}
{{--            if(selectStatus == 'reserved')--}}
{{--            {--}}
{{--                let userModal = document.getElementById('userModal');--}}
{{--			    $('#userModal').modal('show');--}}
{{--		    }        --}}
{{--        },--}}
{{--        changeStatusEdit:function(row)--}}
{{--        {--}}
{{--            let selectStatus = document.getElementById("select-status-edit"+row).value;--}}
{{--            if(selectStatus == 'reserved')--}}
{{--            {--}}
{{--                let userModal = document.getElementById('userModal');--}}
{{--			    $('#userModal').modal('show');--}}
{{--		    }--}}
{{--        },--}}
{{--        changeValue:function()--}}
{{--        {--}}
{{--            let selectStatus = document.getElementById("select-status");--}}
{{--            selectStatus.value = null--}}
{{--        },--}}

{{--        addUser: async function()--}}
{{--        {--}}

{{--            const name = document.getElementById('name-user').value--}}
{{--            const mobile = document.getElementById('mobile-user').value--}}
{{--            const numberpattern = /^[0-9+۰-۹]+$/;--}}
{{--            if(name.trim() == "")--}}
{{--            {--}}
{{--                new swal("خطا", "لطفا نام را وارد کنید", "error");--}}
{{--                let selectStatus = document.getElementById("select-status");--}}
{{--                selectStatus.value = null--}}
{{--                return false--}}
{{--            }--}}
{{--            if(mobile.trim() == "")--}}
{{--            {--}}
{{--                new swal("خطا", "لطفا تلفن همراه خورد را وارد کنید", "error");--}}
{{--                let selectStatus = document.getElementById("select-status");--}}
{{--                selectStatus.value = null  --}}
{{--                return false--}}
{{--            }--}}
{{--            if(!numberpattern.test(mobile))--}}
{{--            {--}}
{{--                new swal("خطا", "لطفا تلفن همراه خورد را به عدد وارد کنید", "error");--}}
{{--                let selectStatus = document.getElementById("select-status");--}}
{{--                selectStatus.value = null --}}
{{--                return false--}}
{{--            }--}}
{{--            let response = await axios.post('users/create-vue', {--}}
{{--                name: name,--}}
{{--                mobile: mobile,--}}
{{--            })--}}
{{--            this.user_id =  response.data.user_id--}}
{{--            --}}
{{--        },--}}
{{--    }--}}

{{--})--}}

{{--new Vue({--}}
{{--    el:'#tik',--}}
{{--    data:{--}}
{{--        msg: 'salam',--}}
{{--        messages: [],--}}
{{--        userId: "{{ Auth()->user()->id }}",--}}
{{--        answer: '',--}}
{{--        ticket_id: "",--}}
{{--        loading:false,--}}
{{--    },--}}
{{--    methods: {--}}
{{--                async show(id) {--}}
{{--                    this.loading = false;--}}
{{--                    const response = await axios.get('{{ url('/admin/ticket/message') }}/' + id)--}}
{{--                    this.messages = response.data;--}}
{{--                    this.loading = true;--}}
{{--                    this.ticket_id = this.messages[0]['tiket_id'];--}}
{{--                    console.log(this.messages)--}}
{{--                    console.log(this.ticket_id) --}}
{{--                    --}}
{{--                },--}}
{{--                async add(id) {--}}
{{--                    console.log(id);--}}
{{--                    let formData = new FormData();--}}
{{--                    console.table(formData.message);--}}
{{--                    formData.append("message", this.answer);--}}
{{--                    formData.append("ticket_id", id);--}}
{{--                    const response = await axios.post('{{ url('/admin/ticket/add/') }}', formData);--}}
{{--                    this.show(id);--}}
{{--                    this.answer='';--}}

{{--                }--}}


{{--            },--}}
{{--})--}}




{{--</script>--}}

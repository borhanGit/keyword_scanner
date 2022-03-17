import Vue from 'vue'


export default Vue.component('summer-note',{
  template: `<textarea ref="summernote" id="summernote" />`,
  computed: {
    summernote() {
      return $(this.$refs.summernote);
    }
  },
  mounted() {
    $(this.$refs.summernote).summernote({
      height: 100
    });
  },

  created() {
    this.summernote.summernote({
      heigh: 300
    })
  },
  methods: {
   
  }
  

})


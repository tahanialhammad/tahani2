<template>
  <div class="col-6 mx-auto my-4" style="max-width: 713px;">
    <form action="" class="d-flex position-relative mx-auto" style="max-width: 713px;height: 56px">
      <input v-model="search" type="text"
             @input="checkInput"
             class="py-2 px-3 border border-2 rounded-3 border-light form-control w-100 shadow-none"
             placeholder="Vind het antwoord op jouw vraag">

      <div class="position-absolute shadow-none p-0" style="right: 19px; top: 17px">
        <icon-search class="icon-md icon-dark pointer"></icon-search>
      </div>
      <ul
          v-show="showFaq"
          class="list-group position-absolute top-100 overflow-auto"
          style="max-height: 200px; z-index: 3"
      >
        <li v-for="(faq , index) in faqFiltered" :key="index"
            class="list-group-item border-bottom-0 border-top-0 border-light">
          <a :href="'/helpcenter/' + faq.section_id + '?faq_id=' + faq.id" v-html="faq.question"></a>
        </li>
      </ul>
    </form>

  </div>
</template>

<script>
import IconSearch from './icons/IconSearch.vue'

export default {
  props: ['faqs'],
   components: {
    IconSearch,
  },

  data() {
    return {
      search: '',
      showFaq: false
    };
  },
  created: function () {
    let self = this;

    window.addEventListener('click', function (e) {
      if (!self.$el.contains(e.target)) {
        self.showFaq = false;
      }
    });
  },
  methods: {
    checkInput() {
      this.showFaq = this.search !== '';
    },
    onclose () {
      this.showFaq = false
    }
  },
  computed: {
    faqFiltered() {
      if (!this.search) {
        return this.faqs;
      }
      return this.faqs.filter(faq => faq['question'].toUpperCase().includes(this.search.toUpperCase()));
    }
  }
}
</script>

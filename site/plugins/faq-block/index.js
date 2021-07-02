panel.plugin('your-project/faq-block', {
  blocks: {
    faq: {
      template: `
        <div @dblclick="open" class="faq">
          <h2>{{ content.headline }}</h2>
          <div v-html="content.text"></div>
          <dl v-for="item in content.blocks">
            <dt v-html="item.content.question"></dt>
            <dd v-html="item.content.answer"></dt>
          </dl>
        </div>
      `
    },
    faqItem: {
      template: `
        <div>
          <strong>
            <k-input
              v-bind="field('question')"
              :value="content.question"
              @input="update({ question: $event })">
            </k-input>
          </strong>
          <p>
            <k-writer
              v-bind="field('answer')"
              :value="content.answer"
              @input="update({ answer: $event })">
            </k-writer>
          </p>
        </div>
      `
    }
  }
});

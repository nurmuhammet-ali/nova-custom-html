import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-nova-custom-html', IndexField)
  app.component('detail-nova-custom-html', DetailField)
  app.component('form-nova-custom-html', FormField)
})

(self.webpackChunkwebpackWcBlocksJsonp=self.webpackChunkwebpackWcBlocksJsonp||[]).push([[5445],{4304:(o,t,n)=>{"use strict";n.r(t),n.d(t,{Block:()=>u,default:()=>d});var c=n(9196),e=n(5736),s=n(3849),l=n.n(s),r=n(2864),a=n(947),i=n(721);n(8094);const u=o=>{const{className:t}=o,n=(0,a.F)(o),{parentClassName:s}=(0,r.useInnerBlockLayoutContext)(),{product:i}=(0,r.useProductDataContext)();if(!i.id)return null;const u=!!i.is_in_stock,d=i.low_stock_remaining,k=i.is_on_backorder;return(0,c.createElement)("div",{className:l()(t,{[`${s}__stock-indicator`]:s,"wc-block-components-product-stock-indicator--in-stock":u,"wc-block-components-product-stock-indicator--out-of-stock":!u,"wc-block-components-product-stock-indicator--low-stock":!!d,"wc-block-components-product-stock-indicator--available-on-backorder":!!k,...o.isDescendantOfAllProducts&&{[n.className]:n.className,"wc-block-components-product-stock-indicator wp-block-woocommerce-product-stock-indicator":!0}}),...o.isDescendantOfAllProducts&&{style:n.style}},(({isInStock:o=!1,isLowStock:t=!1,lowStockAmount:n=null,isOnBackorder:c=!1})=>t&&null!==n?(0,e.sprintf)(/* translators: %d stock amount (number of items in stock for product) */ /* translators: %d stock amount (number of items in stock for product) */
(0,e.__)("%d left in stock","woocommerce"),n):c?(0,e.__)("Available on backorder","woocommerce"):o?(0,e.__)("In stock","woocommerce"):(0,e.__)("Out of stock","woocommerce"))({isInStock:u,isLowStock:!!d,lowStockAmount:d,isOnBackorder:k}))},d=(0,i.withProductDataContext)(u)},947:(o,t,n)=>{"use strict";n.d(t,{F:()=>i});var c=n(3849),e=n.n(c),s=n(7998),l=n(3243),r=n(3392),a=n(172);const i=o=>{const t=(o=>{const t=(0,s.Kn)(o)?o:{style:{}};let n=t.style;return(0,l.H)(n)&&(n=JSON.parse(n)||{}),(0,s.Kn)(n)||(n={}),{...t,style:n}})(o),n=(0,a.vc)(t),c=(0,a.l8)(t),i=(0,a.su)(t),u=(0,r.f)(t);return{className:e()(u.className,n.className,c.className,i.className),style:{...u.style,...n.style,...c.style,...i.style}}}},3392:(o,t,n)=>{"use strict";n.d(t,{f:()=>s});var c=n(7998),e=n(3243);const s=o=>{const t=(0,c.Kn)(o.style.typography)?o.style.typography:{},n=(0,e.H)(t.fontFamily)?t.fontFamily:"";return{className:o.fontFamily?`has-${o.fontFamily}-font-family`:n,style:{fontSize:o.fontSize?`var(--wp--preset--font-size--${o.fontSize})`:t.fontSize,fontStyle:t.fontStyle,fontWeight:t.fontWeight,letterSpacing:t.letterSpacing,lineHeight:t.lineHeight,textDecoration:t.textDecoration,textTransform:t.textTransform}}}},172:(o,t,n)=>{"use strict";n.d(t,{l8:()=>d,su:()=>k,vc:()=>u});var c=n(3849),e=n.n(c),s=n(7427),l=n(2289),r=n(7998);function a(o={}){const t={};return(0,l.getCSSRules)(o,{selector:""}).forEach((o=>{t[o.key]=o.value})),t}function i(o,t){return o&&t?`has-${(0,s.o)(t)}-${o}`:""}function u(o){var t,n,c,s,l,u,d;const{backgroundColor:k,textColor:m,gradient:f,style:v}=o,y=i("background-color",k),p=i("color",m),b=function(o){if(o)return`has-${o}-gradient-background`}(f),g=b||(null==v||null===(t=v.color)||void 0===t?void 0:t.gradient);return{className:e()(p,b,{[y]:!g&&!!y,"has-text-color":m||(null==v||null===(n=v.color)||void 0===n?void 0:n.text),"has-background":k||(null==v||null===(c=v.color)||void 0===c?void 0:c.background)||f||(null==v||null===(s=v.color)||void 0===s?void 0:s.gradient),"has-link-color":(0,r.Kn)(null==v||null===(l=v.elements)||void 0===l?void 0:l.link)?null==v||null===(u=v.elements)||void 0===u||null===(d=u.link)||void 0===d?void 0:d.color:void 0}),style:a({color:(null==v?void 0:v.color)||{}})}}function d(o){var t;const n=(null===(t=o.style)||void 0===t?void 0:t.border)||{};return{className:function(o){var t;const{borderColor:n,style:c}=o,s=n?i("border-color",n):"";return e()({"has-border-color":!!n||!(null==c||null===(t=c.border)||void 0===t||!t.color),[s]:!!s})}(o),style:a({border:n})}}function k(o){var t;return{className:void 0,style:a({spacing:(null===(t=o.style)||void 0===t?void 0:t.spacing)||{}})}}},2893:(o,t,n)=>{"use strict";n.d(t,{F:()=>c});const c=o=>null===o},7998:(o,t,n)=>{"use strict";n.d(t,{$n:()=>s,Kn:()=>e,Qr:()=>l});var c=n(2893);const e=o=>!(0,c.F)(o)&&o instanceof Object&&o.constructor===Object;function s(o,t){return e(o)&&t in o}const l=o=>0===Object.keys(o).length},3243:(o,t,n)=>{"use strict";n.d(t,{H:()=>c});const c=o=>"string"==typeof o},8094:()=>{}}]);
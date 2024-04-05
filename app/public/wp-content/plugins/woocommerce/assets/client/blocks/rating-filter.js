(()=>{var e,t={9592:(e,t,o)=>{"use strict";o.r(t);var r=o(9196);const n=window.wp.blocks;var l=o(2911),s=o(9425),a=o(3849),c=o.n(a);const i=window.wp.blockEditor;var u=o(5736);const d=window.wp.components;var m=o(5158),p=o(7642);o(2198);const w=({className:e,rating:t,ratedProductsCount:o})=>{const n=c()("wc-block-components-product-rating",e),l={width:t/5*100+"%"},s=(0,u.sprintf)(/* translators: %f is referring to the average rating value */ /* translators: %f is referring to the average rating value */
(0,u.__)("Rated %f out of 5","woocommerce"),t),a={__html:(0,u.sprintf)(/* translators: %s is the rating value wrapped in HTML strong tags. */ /* translators: %s is the rating value wrapped in HTML strong tags. */
(0,u.__)("Rated %s out of 5","woocommerce"),(0,u.sprintf)('<strong class="rating">%f</strong>',t))};return(0,r.createElement)("div",{className:n},(0,r.createElement)("div",{className:"wc-block-components-product-rating__stars",role:"img","aria-label":s},(0,r.createElement)("span",{style:l,dangerouslySetInnerHTML:a})),null!==o?(0,r.createElement)("span",{className:"wc-block-components-product-rating-count"},"(",o,")"):null)};var g=o(9307),f=o(9127),b=o.n(f);function _(e){const t=(0,g.useRef)(e);return b()(e,t.current)||(t.current=e),t.current}const y=window.wc.wcBlocksData,v=window.wp.data,h=(0,g.createContext)("page"),E=()=>(0,g.useContext)(h),k=(h.Provider,e=>{const t=E();e=e||t;const o=(0,v.useSelect)((t=>t(y.QUERY_STATE_STORE_KEY).getValueForQueryContext(e,void 0)),[e]),{setValueForQueryContext:r}=(0,v.useDispatch)(y.QUERY_STATE_STORE_KEY);return[o,(0,g.useCallback)((t=>{r(e,t)}),[e,r])]}),C=(e,t,o)=>{const r=E();o=o||r;const n=(0,v.useSelect)((r=>r(y.QUERY_STATE_STORE_KEY).getValueForQueryKey(o,e,t)),[o,e]),{setQueryValue:l}=(0,v.useDispatch)(y.QUERY_STATE_STORE_KEY);return[n,(0,g.useCallback)((t=>{l(o,e,t)}),[o,e,l])]};var S=o(2600);const x=e=>!(e=>null===e)(e)&&e instanceof Object&&e.constructor===Object;function T(e,t){return x(e)&&t in e}var N=o(4167);const R=({queryAttribute:e,queryPrices:t,queryStock:o,queryRating:r,queryState:n,isEditor:l=!1})=>{let s=E();s=`${s}-collection-data`;const[a]=k(s),[c,i]=C("calculate_attribute_counts",[],s),[u,d]=C("calculate_price_range",null,s),[m,p]=C("calculate_stock_status_counts",null,s),[w,f]=C("calculate_rating_counts",null,s),b=_(e||{}),h=_(t),x=_(o),R=_(r);(0,g.useEffect)((()=>{"object"==typeof b&&Object.keys(b).length&&(c.find((e=>T(b,"taxonomy")&&e.taxonomy===b.taxonomy))||i([...c,b]))}),[b,c,i]),(0,g.useEffect)((()=>{u!==h&&void 0!==h&&d(h)}),[h,d,u]),(0,g.useEffect)((()=>{m!==x&&void 0!==x&&p(x)}),[x,p,m]),(0,g.useEffect)((()=>{w!==R&&void 0!==R&&f(R)}),[R,f,w]);const[O,P]=(0,g.useState)(l),[L]=(0,S.Nr)(O,200);O||P(!0);const A=(0,g.useMemo)((()=>(e=>{const t=e;return Array.isArray(e.calculate_attribute_counts)&&(t.calculate_attribute_counts=(0,N.DY)(e.calculate_attribute_counts.map((({taxonomy:e,queryType:t})=>({taxonomy:e,query_type:t})))).asc(["taxonomy","query_type"])),t})(a)),[a]);return(e=>{const{namespace:t,resourceName:o,resourceValues:r=[],query:n={},shouldSelect:l=!0}=e;if(!t||!o)throw new Error("The options object must have valid values for the namespace and the resource properties.");const s=(0,g.useRef)({results:[],isLoading:!0}),a=_(n),c=_(r),i=(()=>{const[,e]=(0,g.useState)();return(0,g.useCallback)((t=>{e((()=>{throw t}))}),[])})(),u=(0,v.useSelect)((e=>{if(!l)return null;const r=e(y.COLLECTIONS_STORE_KEY),n=[t,o,a,c],s=r.getCollectionError(...n);if(s){if(!(s instanceof Error))throw new Error("TypeError: `error` object is not an instance of Error constructor");i(s)}return{results:r.getCollection(...n),isLoading:!r.hasFinishedResolution("getCollection",n)}}),[t,o,c,a,l]);return null!==u&&(s.current=u),s.current})({namespace:"/wc/store/v1",resourceName:"products/collection-data",query:{...n,page:void 0,per_page:void 0,orderby:void 0,order:void 0,...A},shouldSelect:L})},O=window.wc.wcSettings,P=e=>"boolean"==typeof e,L=window.wc.blocksComponents;o(6099);const A=({className:e,isLoading:t,disabled:o,
/* translators: Submit button text for filters. */
label:n=(0,u.__)("Apply","woocommerce"),onClick:l,screenReaderLabel:s=(0,u.__)("Apply filter","woocommerce")})=>(0,r.createElement)("button",{type:"submit",className:c()("wp-block-button__link","wc-block-filter-submit-button","wc-block-components-filter-submit-button",{"is-loading":t},e),disabled:o,onClick:l},(0,r.createElement)(L.Label,{label:n,screenReaderLabel:s}));o(2728);const j=({className:e,
/* translators: Reset button text for filters. */
label:t=(0,u.__)("Reset","woocommerce"),onClick:o,screenReaderLabel:n=(0,u.__)("Reset filter","woocommerce")})=>(0,r.createElement)("button",{className:c()("wc-block-components-filter-reset-button",e),onClick:o},(0,r.createElement)(L.Label,{label:t,screenReaderLabel:n}));var F=o(1394);o(9027);const q=({className:e,style:t,suggestions:o,multiple:n=!0,saveTransform:l=(e=>e.trim().replace(/\s/g,"-")),messages:s={},validateInput:a=(e=>o.includes(e)),label:i="",...u})=>(0,r.createElement)("div",{className:c()("wc-blocks-components-form-token-field-wrapper",e,{"single-selection":!n}),style:t},(0,r.createElement)(F.Z,{label:i,__experimentalExpandOnFocus:!0,__experimentalShowHowTo:!1,__experimentalValidateInput:a,saveTransform:l,maxLength:n?void 0:1,suggestions:o,messages:s,...u})),B=window.wp.url,Q=(0,O.getSettingWithCoercion)("isRenderingPhpTemplate",!1,P);function D(e){Q?((e=e.replace(/(?:query-(?:\d+-)?page=(\d+))|(?:page\/(\d+))/g,"")).endsWith("?")&&(e=e.slice(0,-1)),window.location.href=e):window.history.replaceState({},"",e)}const M=e=>{const t=(0,B.getQueryArgs)(e);return(0,B.addQueryArgs)(e,t)},Y=[{label:(0,r.createElement)(w,{key:5,rating:5,ratedProductsCount:null}),value:"5"},{label:(0,r.createElement)(w,{key:4,rating:4,ratedProductsCount:null}),value:"4"},{label:(0,r.createElement)(w,{key:3,rating:3,ratedProductsCount:null}),value:"3"},{label:(0,r.createElement)(w,{key:2,rating:2,ratedProductsCount:null}),value:"2"},{label:(0,r.createElement)(w,{key:1,rating:1,ratedProductsCount:null}),value:"1"}];o(8409);function I(){return Math.floor(Math.random()*Date.now())}const V=e=>e.trim().replace(/\s/g,"-").replace(/_/g,"-").replace(/-+/g,"-").replace(/[^a-zA-Z0-9-]/g,""),W=(0,g.createContext)({}),G="rating_filter",K=e=>(0,u.sprintf)(/* translators: %s is referring to the average rating value */ /* translators: %s is referring to the average rating value */
(0,u.__)("Rated %s out of 5 filter added.","woocommerce"),e),Z=e=>(0,u.sprintf)(/* translators: %s is referring to the average rating value */ /* translators: %s is referring to the average rating value */
(0,u.__)("Rated %s out of 5 filter added.","woocommerce"),e),U=({attributes:e,isEditor:t,noRatingsNotice:o=null})=>{const n=(()=>{const{wrapper:e}=(0,g.useContext)(W);return t=>{e&&e.current&&(e.current.hidden=!t)}})(),s=(0,O.getSettingWithCoercion)("isRenderingPhpTemplate",!1,P),[a,i]=(0,g.useState)(!1),[d]=k(),{results:f,isLoading:y}=R({queryRating:!0,queryState:d,isEditor:t}),[v,h]=(0,g.useState)(e.isPreview?Y:[]),E=!e.isPreview&&y&&0===v.length,S=!e.isPreview&&y,N=(0,g.useMemo)((()=>((e="filter_rating")=>{const t=(o=e,window?(0,B.getQueryArg)(window.location.href,o):null);var o;return t?"string"==typeof t?t.split(","):t:[]})("rating_filter")),[]),[F,Q]=(0,g.useState)(N),[U,J]=C("rating",N),[$,z]=(0,g.useState)(I()),[H,X]=(0,g.useState)(!1),ee="single"!==e.selectType,te=ee?!E&&F.length<v.length:!E&&0===F.length,oe=(0,g.useCallback)((e=>{t||(e&&!s&&J(e),(e=>{if(!window)return;if(0===e.length){const e=(0,B.removeQueryArgs)(window.location.href,G);return void(e!==M(window.location.href)&&D(e))}const t=(0,B.addQueryArgs)(window.location.href,{[G]:e.join(",")});t!==M(window.location.href)&&D(t)})(e))}),[t,J,s]);(0,g.useEffect)((()=>{e.showFilterButton||oe(F)}),[e.showFilterButton,F,oe]);const re=_((0,g.useMemo)((()=>U),[U])),ne=function(e,t){const o=(0,g.useRef)();return(0,g.useEffect)((()=>{o.current===e||(o.current=e)}),[e,t]),o.current}(re);(0,g.useEffect)((()=>{b()(ne,re)||b()(F,re)||Q(re)}),[F,re,ne]),(0,g.useEffect)((()=>{a||(J(N),i(!0))}),[J,a,i,N]),(0,g.useEffect)((()=>{if(y||e.isPreview)return;const o=!y&&T(f,"rating_counts")&&Array.isArray(f.rating_counts)?[...f.rating_counts].reverse():[];if(t&&0===o.length)return h(Y),void X(!0);const n=o.filter((e=>x(e)&&Object.keys(e).length>0)).map((t=>{var o;return{label:(0,r.createElement)(w,{key:null==t?void 0:t.rating,rating:null==t?void 0:t.rating,ratedProductsCount:e.showCounts?null==t?void 0:t.count:null}),value:null==t||null===(o=t.rating)||void 0===o?void 0:o.toString()}}));h(n),z(I())}),[e.showCounts,e.isPreview,f,y,U,t]);const le=(0,g.useCallback)((e=>{const t=F.includes(e);if(!ee){const o=t?[]:[e];return(0,m.speak)(t?Z(e):K(e)),void Q(o)}if(t){const t=F.filter((t=>t!==e));return(0,m.speak)(Z(e)),void Q(t)}const o=[...F,e].sort(((e,t)=>Number(t)-Number(e)));(0,m.speak)(K(e)),Q(o)}),[F,ee]);return(y||0!==v.length)&&(0,O.getSettingWithCoercion)("hasFilterableProducts",!1,P)?(n(!0),(0,r.createElement)(r.Fragment,null,H&&o,(0,r.createElement)("div",{className:c()("wc-block-rating-filter",`style-${e.displayStyle}`,{"is-loading":E})},"dropdown"===e.displayStyle?(0,r.createElement)(r.Fragment,null,(0,r.createElement)(q,{key:$,className:c()({"single-selection":!ee,"is-loading":E}),style:{borderStyle:"none"},suggestions:v.filter((e=>!F.includes(e.value))).map((e=>e.value)),disabled:E,placeholder:(0,u.__)("Select Rating","woocommerce"),onChange:e=>{!ee&&e.length>1&&(e=[e[e.length-1]]);const t=[e=e.map((e=>{const t=v.find((t=>t.value===e));return t?t.value:e})),F].reduce(((e,t)=>e.filter((e=>!t.includes(e)))));if(1===t.length)return le(t[0]);const o=[F,e].reduce(((e,t)=>e.filter((e=>!t.includes(e)))));1===o.length&&le(o[0])},value:F,displayTransform:e=>{const t={value:e,label:(0,r.createElement)(w,{key:Number(e),rating:Number(e),ratedProductsCount:0})},o=v.find((t=>t.value===e))||t,{label:n,value:l}=o;return Object.assign({},n,{toLocaleLowerCase:()=>l,substring:(e,t)=>0===e&&1===t?n:""})},saveTransform:V,messages:{added:(0,u.__)("Rating filter added.","woocommerce"),removed:(0,u.__)("Rating filter removed.","woocommerce"),remove:(0,u.__)("Remove rating filter.","woocommerce"),__experimentalInvalid:(0,u.__)("Invalid rating filter.","woocommerce")}}),te&&(0,r.createElement)(l.Z,{icon:p.Z,size:30})):(0,r.createElement)(L.CheckboxList,{className:"wc-block-rating-filter-list",options:v,checked:F,onChange:e=>{le(e.toString())},isLoading:E,isDisabled:S})),(0,r.createElement)("div",{className:"wc-block-rating-filter__actions"},(F.length>0||t)&&!E&&(0,r.createElement)(j,{onClick:()=>{Q([]),J([]),oe([])},screenReaderLabel:(0,u.__)("Reset rating filter","woocommerce")}),e.showFilterButton&&(0,r.createElement)(A,{className:"wc-block-rating-filter__button",isLoading:E,disabled:E||S,onClick:()=>oe(F)})))):(n(!1),null)};o(2753);const J=(0,r.createElement)(d.Notice,{status:"warning",isDismissible:!1},(0,r.createElement)("p",null,(0,u.__)("Your store doesn't have any products with ratings yet. This filter option will display when a product receives a review.","woocommerce"))),$=(0,d.withSpokenMessages)((({attributes:e,setAttributes:t})=>{const{className:o,displayStyle:n,showCounts:l,showFilterButton:s,selectType:a}=e,m=(0,i.useBlockProps)({className:c()("wc-block-rating-filter",o)});return(0,r.createElement)(r.Fragment,null,(0,r.createElement)(i.InspectorControls,{key:"inspector"},(0,r.createElement)(d.PanelBody,{title:(0,u.__)("Display Settings","woocommerce")},(0,r.createElement)(d.ToggleControl,{label:(0,u.__)("Display product count","woocommerce"),checked:l,onChange:()=>t({showCounts:!l})}),(0,r.createElement)(d.__experimentalToggleGroupControl,{label:(0,u.__)("Allow selecting multiple options?","woocommerce"),value:a||"multiple",onChange:e=>t({selectType:e}),className:"wc-block-attribute-filter__multiple-toggle"},(0,r.createElement)(d.__experimentalToggleGroupControlOption,{value:"multiple",label:(0,u.__)("Multiple","woocommerce")}),(0,r.createElement)(d.__experimentalToggleGroupControlOption,{value:"single",label:(0,u.__)("Single","woocommerce")})),(0,r.createElement)(d.__experimentalToggleGroupControl,{label:(0,u.__)("Display Style","woocommerce"),value:n,onChange:e=>t({displayStyle:e}),className:"wc-block-attribute-filter__display-toggle"},(0,r.createElement)(d.__experimentalToggleGroupControlOption,{value:"list",label:(0,u.__)("List","woocommerce")}),(0,r.createElement)(d.__experimentalToggleGroupControlOption,{value:"dropdown",label:(0,u.__)("Dropdown","woocommerce")})),(0,r.createElement)(d.ToggleControl,{label:(0,u.__)("Show 'Apply filters' button","woocommerce"),help:(0,u.__)("Products will update when the button is clicked.","woocommerce"),checked:s,onChange:e=>t({showFilterButton:e})}))),(0,r.createElement)("div",{...m},(0,r.createElement)(d.Disabled,null,(0,r.createElement)(U,{attributes:e,isEditor:!0,noRatingsNotice:J}))))})),z=JSON.parse('{"name":"woocommerce/rating-filter","version":"1.0.0","title":"Filter by Rating Controls","description":"Enable customers to filter the product grid by rating.","category":"woocommerce","keywords":["WooCommerce"],"supports":{"html":false,"multiple":false,"color":true,"inserter":false,"lock":false},"attributes":{"className":{"type":"string","default":""},"showCounts":{"type":"boolean","default":false},"displayStyle":{"type":"string","default":"list"},"showFilterButton":{"type":"boolean","default":false},"selectType":{"type":"string","default":"multiple"},"isPreview":{"type":"boolean","default":false}},"textdomain":"woocommerce","apiVersion":2,"$schema":"https://schemas.wp.org/trunk/block.json"}'),H=[{attributes:{...z.attributes,showCounts:{type:"boolean",default:!0}},save:({attributes:e})=>{const{className:t,showCounts:o}=e,n={"data-show-counts":o};return(0,r.createElement)("div",{...i.useBlockProps.save({className:c()("is-loading",t)}),...n},(0,r.createElement)("span",{"aria-hidden":!0,className:"wc-block-product-rating-filter__placeholder"}))}}];(0,n.registerBlockType)(z,{icon:{src:(0,r.createElement)(l.Z,{icon:s.Z,className:"wc-block-editor-components-block-icon"})},attributes:{...z.attributes},edit:$,save({attributes:e}){const{className:t}=e;return(0,r.createElement)("div",{...i.useBlockProps.save({className:c()("is-loading",t)})})},deprecated:H})},2728:()=>{},6099:()=>{},9027:()=>{},2198:()=>{},2753:()=>{},8409:()=>{},9196:e=>{"use strict";e.exports=window.React},2819:e=>{"use strict";e.exports=window.lodash},5158:e=>{"use strict";e.exports=window.wp.a11y},4333:e=>{"use strict";e.exports=window.wp.compose},7180:e=>{"use strict";e.exports=window.wp.deprecated},5904:e=>{"use strict";e.exports=window.wp.dom},9307:e=>{"use strict";e.exports=window.wp.element},5736:e=>{"use strict";e.exports=window.wp.i18n},9127:e=>{"use strict";e.exports=window.wp.isShallowEqual},9630:e=>{"use strict";e.exports=window.wp.keycodes},444:e=>{"use strict";e.exports=window.wp.primitives},2560:e=>{"use strict";e.exports=window.wp.warning}},o={};function r(e){var n=o[e];if(void 0!==n)return n.exports;var l=o[e]={exports:{}};return t[e].call(l.exports,l,l.exports,r),l.exports}r.m=t,e=[],r.O=(t,o,n,l)=>{if(!o){var s=1/0;for(u=0;u<e.length;u++){for(var[o,n,l]=e[u],a=!0,c=0;c<o.length;c++)(!1&l||s>=l)&&Object.keys(r.O).every((e=>r.O[e](o[c])))?o.splice(c--,1):(a=!1,l<s&&(s=l));if(a){e.splice(u--,1);var i=n();void 0!==i&&(t=i)}}return t}l=l||0;for(var u=e.length;u>0&&e[u-1][2]>l;u--)e[u]=e[u-1];e[u]=[o,n,l]},r.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return r.d(t,{a:t}),t},r.d=(e,t)=>{for(var o in t)r.o(t,o)&&!r.o(e,o)&&Object.defineProperty(e,o,{enumerable:!0,get:t[o]})},r.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),r.r=e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},r.j=9568,(()=>{var e={9568:0};r.O.j=t=>0===e[t];var t=(t,o)=>{var n,l,[s,a,c]=o,i=0;if(s.some((t=>0!==e[t]))){for(n in a)r.o(a,n)&&(r.m[n]=a[n]);if(c)var u=c(r)}for(t&&t(o);i<s.length;i++)l=s[i],r.o(e,l)&&e[l]&&e[l][0](),e[l]=0;return r.O(u)},o=self.webpackChunkwebpackWcBlocksJsonp=self.webpackChunkwebpackWcBlocksJsonp||[];o.forEach(t.bind(null,0)),o.push=t.bind(null,o.push.bind(o))})();var n=r.O(void 0,[2869],(()=>r(9592)));n=r.O(n),((this.wc=this.wc||{}).blocks=this.wc.blocks||{})["rating-filter"]=n})();
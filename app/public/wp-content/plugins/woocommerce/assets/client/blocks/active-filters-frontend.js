(()=>{var e={3849:(e,t)=>{var r;!function(){"use strict";var o={}.hasOwnProperty;function n(){for(var e=[],t=0;t<arguments.length;t++){var r=arguments[t];if(r){var l=typeof r;if("string"===l||"number"===l)e.push(r);else if(Array.isArray(r)){if(r.length){var a=n.apply(null,r);a&&e.push(a)}}else if("object"===l)if(r.toString===Object.prototype.toString)for(var i in r)o.call(r,i)&&r[i]&&e.push(i);else e.push(r.toString())}}return e.join(" ")}e.exports?(n.default=n,e.exports=n):void 0===(r=function(){return n}.apply(t,[]))||(e.exports=r)}()},8406:()=>{},1753:()=>{},7924:()=>{}},t={};function r(o){var n=t[o];if(void 0!==n)return n.exports;var l=t[o]={exports:{}};return e[o](l,l.exports,r),l.exports}r.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return r.d(t,{a:t}),t},r.d=(e,t)=>{for(var o in t)r.o(t,o)&&!r.o(e,o)&&Object.defineProperty(e,o,{enumerable:!0,get:t[o]})},r.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{"use strict";const e=window.React,t=window.wp.element;function o(e){return o="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},o(e)}const n=window.wp.i18n,l=window.wc.wcSettings;var a,i,s,c,u,m,p,d,f,y;const g=(0,l.getSetting)("wcBlocksConfig",{buildPhase:1,pluginUrl:"",productCount:0,defaultAvatar:"",restApiRoutes:{},wordCountType:"words"}),b=g.pluginUrl+"assets/images/",w=(g.pluginUrl,g.buildPhase,null===(a=l.STORE_PAGES.shop)||void 0===a||a.permalink,null===(i=l.STORE_PAGES.checkout)||void 0===i||i.id,null===(s=l.STORE_PAGES.checkout)||void 0===s||s.permalink,null===(c=l.STORE_PAGES.privacy)||void 0===c||c.permalink,null===(u=l.STORE_PAGES.privacy)||void 0===u||u.title,null===(m=l.STORE_PAGES.terms)||void 0===m||m.permalink,null===(p=l.STORE_PAGES.terms)||void 0===p||p.title,null===(d=l.STORE_PAGES.cart)||void 0===d||d.id,null===(f=l.STORE_PAGES.cart)||void 0===f||f.permalink,null!==(y=l.STORE_PAGES.myaccount)&&void 0!==y&&y.permalink?l.STORE_PAGES.myaccount.permalink:(0,l.getSetting)("wpLoginUrl","/wp-login.php"),(0,l.getSetting)("localPickupEnabled",!1),(0,l.getSetting)("countries",{})),_=(0,l.getSetting)("countryData",{}),E=(Object.fromEntries(Object.keys(_).filter((e=>!0===_[e].allowBilling)).map((e=>[e,w[e]||""]))),Object.fromEntries(Object.keys(_).filter((e=>!0===_[e].allowBilling)).map((e=>[e,_[e].states||[]]))),Object.fromEntries(Object.keys(_).filter((e=>!0===_[e].allowShipping)).map((e=>[e,w[e]||""]))),Object.fromEntries(Object.keys(_).filter((e=>!0===_[e].allowShipping)).map((e=>[e,_[e].states||[]]))),Object.fromEntries(Object.keys(_).map((e=>[e,_[e].locale||[]]))),{address:["first_name","last_name","company","address_1","address_2","city","postcode","country","state","phone"],contact:["email"],additional:[]}),h=((0,l.getSetting)("addressFieldsLocations",E).address,(0,l.getSetting)("addressFieldsLocations",E).contact,(0,l.getSetting)("addressFieldsLocations",E).additional,(0,l.getSetting)("additionalFields",{}),(0,l.getSetting)("additionalContactFields",{}),(0,l.getSetting)("additionalAddressFields",{}),({imageUrl:t=`${b}/block-error.svg`,header:r=(0,n.__)("Oops!","woocommerce"),text:o=(0,n.__)("There was an error loading the content.","woocommerce"),errorMessage:l,errorMessagePrefix:a=(0,n.__)("Error:","woocommerce"),button:i,showErrorBlock:s=!0})=>s?(0,e.createElement)("div",{className:"wc-block-error wc-block-components-error"},t&&(0,e.createElement)("img",{className:"wc-block-error__image wc-block-components-error__image",src:t,alt:""}),(0,e.createElement)("div",{className:"wc-block-error__content wc-block-components-error__content"},r&&(0,e.createElement)("p",{className:"wc-block-error__header wc-block-components-error__header"},r),o&&(0,e.createElement)("p",{className:"wc-block-error__text wc-block-components-error__text"},o),l&&(0,e.createElement)("p",{className:"wc-block-error__message wc-block-components-error__message"},a?a+" ":"",l),i&&(0,e.createElement)("p",{className:"wc-block-error__button wc-block-components-error__button"},i))):null);r(8406);class v extends t.Component{constructor(...e){var t,r,n;super(...e),t=this,n={errorMessage:"",hasError:!1},(r=function(e){var t=function(e,t){if("object"!==o(e)||null===e)return e;var r=e[Symbol.toPrimitive];if(void 0!==r){var n=r.call(e,"string");if("object"!==o(n))return n;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(e)}(e);return"symbol"===o(t)?t:String(t)}(r="state"))in t?Object.defineProperty(t,r,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[r]=n}static getDerivedStateFromError(t){return void 0!==t.statusText&&void 0!==t.status?{errorMessage:(0,e.createElement)(e.Fragment,null,(0,e.createElement)("strong",null,t.status),": ",t.statusText),hasError:!0}:{errorMessage:t.message,hasError:!0}}render(){const{header:t,imageUrl:r,showErrorMessage:o=!0,showErrorBlock:n=!0,text:l,errorMessagePrefix:a,renderError:i,button:s}=this.props,{errorMessage:c,hasError:u}=this.state;return u?"function"==typeof i?i({errorMessage:c}):(0,e.createElement)(h,{showErrorBlock:n,errorMessage:o?c:null,header:t,imageUrl:r,text:l,errorMessagePrefix:a,button:s}):this.props.children}}const S=v,k=[".wp-block-woocommerce-cart"],A=({Block:r,containers:o,getProps:n=(()=>({})),getErrorBoundaryProps:l=(()=>({}))})=>{0!==o.length&&Array.prototype.forEach.call(o,((o,a)=>{const i=n(o,a),s=l(o,a),c={...o.dataset,...i.attributes||{}};(({Block:r,container:o,attributes:n={},props:l={},errorBoundaryProps:a={}})=>{(0,t.render)((0,e.createElement)(S,{...a},(0,e.createElement)(t.Suspense,{fallback:(0,e.createElement)("div",{className:"wc-block-placeholder"})},r&&(0,e.createElement)(r,{...l,attributes:n}))),o,(()=>{o.classList&&o.classList.remove("is-loading")}))})({Block:r,container:o,props:i,attributes:c,errorBoundaryProps:s})}))},P=window.wc.wcBlocksData,O=window.wp.data,j=window.wp.isShallowEqual;var N=r.n(j);const x=(0,t.createContext)("page"),C=(x.Provider,(e,r,o)=>{const n=(0,t.useContext)(x);o=o||n;const l=(0,O.useSelect)((t=>t(P.QUERY_STATE_STORE_KEY).getValueForQueryKey(o,e,r)),[o,e]),{setQueryValue:a}=(0,O.useDispatch)(P.QUERY_STATE_STORE_KEY);return[l,(0,t.useCallback)((t=>{a(o,e,t)}),[o,e,a])]});var L=r(3849),R=r.n(L);const B=window.wc.blocksComponents,T=e=>"boolean"==typeof e,F=e=>!(e=>null===e)(e)&&e instanceof Object&&e.constructor===Object;function M(e,t){return F(e)&&t in e}const Q=e=>M(e,"count")&&M(e,"description")&&M(e,"id")&&M(e,"name")&&M(e,"parent")&&M(e,"slug")&&"number"==typeof e.count&&"string"==typeof e.description&&"number"==typeof e.id&&"string"==typeof e.name&&"number"==typeof e.parent&&"string"==typeof e.slug,G=e=>M(e,"attribute")&&M(e,"operator")&&M(e,"slug")&&"string"==typeof e.attribute&&"string"==typeof e.operator&&Array.isArray(e.slug)&&e.slug.every((e=>"string"==typeof e)),U=e=>Array.isArray(e)&&e.every(G),$=window.wp.url,q=(0,l.getSettingWithCoercion)("isRenderingPhpTemplate",!1,T);function Y(e){q?((e=e.replace(/(?:query-(?:\d+-)?page=(\d+))|(?:page\/(\d+))/g,"")).endsWith("?")&&(e=e.slice(0,-1)),window.location.href=e):window.history.replaceState({},"",e)}r(1753);const D=({children:t})=>(0,e.createElement)("div",{className:"wc-block-filter-title-placeholder"},t);r(7924);const V=(0,l.getSetting)("attributes",[]).reduce(((e,t)=>{const r=(o=t)&&o.attribute_name?{id:parseInt(o.attribute_id,10),name:o.attribute_name,taxonomy:"pa_"+o.attribute_name,label:o.attribute_label}:null;var o;return r&&r.id&&e.push(r),e}),[]),W=window.wc.priceFormat,z=(0,t.forwardRef)((function({icon:e,size:r=24,...o},n){return(0,t.cloneElement)(e,{width:r,height:r,...o,ref:n})})),I=window.wp.primitives,K=(0,e.createElement)(I.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},(0,e.createElement)(I.Path,{d:"M12 13.06l3.712 3.713 1.061-1.06L13.061 12l3.712-3.712-1.06-1.06L12 10.938 8.288 7.227l-1.061 1.06L10.939 12l-3.712 3.712 1.06 1.061L12 13.061z"})),Z=e=>"string"==typeof e,J=JSON.parse('{"Y4":{"P":{"Z":"list"},"D":{"Z":3}}}'),H=(e,t)=>Number.isFinite(e)&&Number.isFinite(t)?(0,n.sprintf)(/* translators: %1$s min price, %2$s max price */ /* translators: %1$s min price, %2$s max price */
(0,n.__)("Between %1$s and %2$s","woocommerce"),(0,W.formatPrice)(e),(0,W.formatPrice)(t)):Number.isFinite(e)?(0,n.sprintf)(/* translators: %s min price */ /* translators: %s min price */
(0,n.__)("From %s","woocommerce"),(0,W.formatPrice)(e)):(0,n.sprintf)(/* translators: %s max price */ /* translators: %s max price */
(0,n.__)("Up to %s","woocommerce"),(0,W.formatPrice)(t)),X=({type:t,name:r,prefix:o="",removeCallback:l=(()=>null),showLabel:a=!0,displayStyle:i})=>{const s=o?(0,e.createElement)(e.Fragment,null,o," ",r):r,c=(0,n.sprintf)(/* translators: %s attribute value used in the filter. For example: yellow, green, small, large. */ /* translators: %s attribute value used in the filter. For example: yellow, green, small, large. */
(0,n.__)("Remove %s filter","woocommerce"),r);return(0,e.createElement)("li",{className:"wc-block-active-filters__list-item",key:t+":"+r},a&&(0,e.createElement)("span",{className:"wc-block-active-filters__list-item-type"},t+": "),"chips"===i?(0,e.createElement)(B.RemovableChip,{element:"span",text:s,onRemove:l,radius:"large",ariaLabel:c}):(0,e.createElement)("span",{className:"wc-block-active-filters__list-item-name"},(0,e.createElement)("button",{className:"wc-block-active-filters__list-item-remove",onClick:l},(0,e.createElement)(z,{className:"wc-block-components-chip__remove-icon",icon:K,size:16}),(0,e.createElement)(B.Label,{screenReaderLabel:c})),s))},ee=(...e)=>{if(!window)return;const t=window.location.href,r=(0,$.getQueryArgs)(t),o=(0,$.removeQueryArgs)(t,...Object.keys(r));e.forEach((e=>{if("string"==typeof e)return delete r[e];if("object"==typeof e){const t=Object.keys(e)[0],o=r[t].toString().split(",");r[t]=o.filter((r=>r!==e[t])).join(",")}}));const n=Object.fromEntries(Object.entries(r).filter((([,e])=>e)));Y((0,$.addQueryArgs)(o,n))},te=["min_price","max_price","rating_filter","filter_","query_type_"],re=e=>{let t=!1;for(let r=0;te.length>r;r++){const o=te[r];if(o===e.substring(0,o.length)){t=!0;break}}return t};function oe(e){const r=(0,t.useRef)(e);return N()(e,r.current)||(r.current=e),r.current}const ne=window.wp.htmlEntities;var le=function(e){return function(t,r,o){return e(t,r,o)*o}},ae=function(e,t){if(e)throw Error("Invalid sort config: "+t)},ie=function(e){var t=e||{},r=t.asc,o=t.desc,n=r?1:-1,l=r||o;return ae(!l,"Expected `asc` or `desc` property"),ae(r&&o,"Ambiguous object with `asc` and `desc` config properties"),{order:n,sortBy:l,comparer:e.comparer&&le(e.comparer)}};function se(e,t,r){if(void 0===e||!0===e)return function(e,o){return t(e,o,r)};if("string"==typeof e)return ae(e.includes("."),"String syntax not allowed for nested properties."),function(o,n){return t(o[e],n[e],r)};if("function"==typeof e)return function(o,n){return t(e(o),e(n),r)};if(Array.isArray(e)){var o=function(e){return function t(r,o,n,l,a,i,s){var c,u;if("string"==typeof r)c=i[r],u=s[r];else{if("function"!=typeof r){var m=ie(r);return t(m.sortBy,o,n,m.order,m.comparer||e,i,s)}c=r(i),u=r(s)}var p=a(c,u,l);return(0===p||null==c&&null==u)&&o.length>n?t(o[n],o,n+1,l,a,i,s):p}}(t);return function(n,l){return o(e[0],e,1,r,t,n,l)}}var n=ie(e);return se(n.sortBy,n.comparer||t,n.order)}var ce=function(e,t,r,o){return Array.isArray(t)?(Array.isArray(r)&&r.length<2&&(r=r[0]),t.sort(se(r,o,e))):t};function ue(e){var t=le(e.comparer);return function(r){var o=Array.isArray(r)&&!e.inPlaceSorting?r.slice():r;return{asc:function(e){return ce(1,o,e,t)},desc:function(e){return ce(-1,o,e,t)},by:function(e){return ce(1,o,e,t)}}}}var me=function(e,t,r){return null==e?r:null==t?-r:typeof e!=typeof t?typeof e<typeof t?-1:1:e<t?-1:e>t?1:0},pe=ue({comparer:me});ue({comparer:me,inPlaceSorting:!0});const de=({attributeObject:r,slugs:o=[],operator:a="in",displayStyle:i,isLoadingCallback:s})=>{const{results:c,isLoading:u}=(e=>{const{namespace:r,resourceName:o,resourceValues:n=[],query:l={},shouldSelect:a=!0}=e;if(!r||!o)throw new Error("The options object must have valid values for the namespace and the resource properties.");const i=(0,t.useRef)({results:[],isLoading:!0}),s=oe(l),c=oe(n),u=(()=>{const[,e]=(0,t.useState)();return(0,t.useCallback)((t=>{e((()=>{throw t}))}),[])})(),m=(0,O.useSelect)((e=>{if(!a)return null;const t=e(P.COLLECTIONS_STORE_KEY),n=[r,o,s,c],l=t.getCollectionError(...n);if(l){if(!(l instanceof Error))throw new Error("TypeError: `error` object is not an instance of Error constructor");u(l)}return{results:t.getCollection(...n),isLoading:!t.hasFinishedResolution("getCollection",n)}}),[r,o,c,s,a]);return null!==m&&(i.current=m),i.current})({namespace:"/wc/store/v1",resourceName:"products/attributes/terms",resourceValues:[r.id]}),[m,p]=C("attributes",[]);if((0,t.useEffect)((()=>{s(u)}),[u,s]),!(Array.isArray(c)&&(d=c,Array.isArray(d)&&d.every(Q))&&U(m)))return null;var d;const f=r.label,y=(0,l.getSettingWithCoercion)("isRenderingPhpTemplate",!1,T);return(0,e.createElement)("li",null,(0,e.createElement)("span",{className:"wc-block-active-filters__list-item-type"},f,":"),(0,e.createElement)("ul",null,o.map(((t,o)=>{const l=c.find((e=>e.slug===t));if(!l)return null;let s="";return o>0&&"and"===a&&(s=(0,e.createElement)("span",{className:"wc-block-active-filters__list-item-operator"},(0,n.__)("All","woocommerce"))),X({type:f,name:(0,ne.decodeEntities)(l.name||t),prefix:s,isLoading:u,removeCallback:()=>{const e=m.find((({attribute:e})=>e===`pa_${r.name}`));1===(null==e?void 0:e.slug.length)?ee(`query_type_${r.name}`,`filter_${r.name}`):ee({[`filter_${r.name}`]:t}),y||((e=[],t,r,o="")=>{const n=e.filter((e=>e.attribute===r.taxonomy)),l=n.length?n[0]:null;if(!(l&&l.slug&&Array.isArray(l.slug)&&l.slug.includes(o)))return;const a=l.slug.filter((e=>e!==o)),i=e.filter((e=>e.attribute!==r.taxonomy));a.length>0&&(l.slug=a.sort(),i.push(l)),t(pe(i).asc("attribute"))})(m,p,r,t)},showLabel:!1,displayStyle:i})}))))},fe=({displayStyle:t,isLoading:r})=>r?(0,e.createElement)(e.Fragment,null,[...Array("list"===t?2:3)].map(((r,o)=>(0,e.createElement)("li",{className:"list"===t?"show-loading-state-list":"show-loading-state-chips",key:o},(0,e.createElement)("span",{className:"show-loading-state__inner"}))))):null,ye=(0,t.createContext)({});(e=>{const t=document.body.querySelectorAll(k.join(",")),{Block:r,getProps:o,getErrorBoundaryProps:n,selector:l}=e;(({Block:e,getProps:t,getErrorBoundaryProps:r,selector:o,wrappers:n})=>{const l=document.body.querySelectorAll(o);n&&n.length>0&&Array.prototype.filter.call(l,(e=>!((e,t)=>Array.prototype.some.call(t,(t=>t.contains(e)&&!t.isSameNode(e))))(e,n))),A({Block:e,containers:l,getProps:t,getErrorBoundaryProps:r})})({Block:r,getProps:o,getErrorBoundaryProps:n,selector:l,wrappers:t}),Array.prototype.forEach.call(t,(t=>{t.addEventListener("wc-blocks_render_blocks_frontend",(()=>{(({Block:e,getProps:t,getErrorBoundaryProps:r,selector:o,wrapper:n})=>{const l=n.querySelectorAll(o);A({Block:e,containers:l,getProps:t,getErrorBoundaryProps:r})})({...e,wrapper:t})}))}))})({selector:".wp-block-woocommerce-active-filters",Block:({attributes:r,isEditor:o=!1})=>{const a=(()=>{const{wrapper:e}=(0,t.useContext)(ye);return t=>{e&&e.current&&(e.current.hidden=!t)}})(),i=function(){const e=(0,t.useRef)(!1);return(0,t.useEffect)((()=>(e.current=!0,()=>{e.current=!1})),[]),(0,t.useCallback)((()=>e.current),[])}()(),s=(0,l.getSettingWithCoercion)("isRenderingPhpTemplate",!1,T),[c,u]=(0,t.useState)(!0),m=(()=>{if(!window)return!1;const e=window.location.href,t=(0,$.getQueryArgs)(e),r=Object.keys(t);let o=!1;for(let e=0;r.length>e;e++){const t=r[e];if(re(t)){o=!0;break}}return o})()&&!o&&c,[p,d]=C("attributes",[]),[f,y]=C("stock_status",[]),[g,b]=C("min_price"),[w,_]=C("max_price"),[E,h]=C("rating"),v=(0,l.getSetting)("stockStatusOptions",[]),S=(0,l.getSetting)("attributes",[]),k=(0,t.useMemo)((()=>{if(m||0===f.length||(t=f,!Array.isArray(t)||!t.every((e=>["instock","outofstock","onbackorder"].includes(e))))||!(e=>F(e)&&Object.keys(e).every((e=>["instock","outofstock","onbackorder"].includes(e))))(v))return null;var t;const o=(0,n.__)("Stock Status","woocommerce");return(0,e.createElement)("li",null,(0,e.createElement)("span",{className:"wc-block-active-filters__list-item-type"},o,":"),(0,e.createElement)("ul",null,f.map((e=>X({type:o,name:v[e],removeCallback:()=>{if(ee({filter_stock_status:e}),!s){const t=f.filter((t=>t!==e));y(t)}},showLabel:!1,displayStyle:r.displayStyle})))))}),[m,v,f,y,r.displayStyle,s]),A=(0,t.useMemo)((()=>m||!Number.isFinite(g)&&!Number.isFinite(w)?null:X({type:(0,n.__)("Price","woocommerce"),name:H(g,w),removeCallback:()=>{ee("max_price","min_price"),s||(b(void 0),_(void 0))},displayStyle:r.displayStyle})),[m,g,w,r.displayStyle,b,_,s]),P=(0,t.useMemo)((()=>!U(p)&&i||!p.length&&!(e=>{if(!window)return!1;const t=e.map((e=>`filter_${e.attribute_name}`)),r=window.location.href,o=(0,$.getQueryArgs)(r),n=Object.keys(o);let l=!1;for(let e=0;n.length>e;e++){const r=n[e];if(t.includes(r)){l=!0;break}}return l})(S)?(c&&u(!1),null):p.map((t=>{const o=(e=>{if(e)return V.find((t=>t.taxonomy===e))})(t.attribute);return o?(0,e.createElement)(de,{attributeObject:o,displayStyle:r.displayStyle,slugs:t.slug,key:t.attribute,operator:t.operator,isLoadingCallback:u}):(c&&u(!1),null)}))),[p,i,S,c,r.displayStyle]);(0,t.useEffect)((()=>{var e;if(!s)return;if(E.length&&E.length>0)return;const t=null===("rating_filter",e=window?(0,$.getQueryArg)(window.location.href,"rating_filter"):null)||void 0===e?void 0:e.toString();t&&h(t.split(","))}),[s,E,h]);const O=(0,t.useMemo)((()=>{if(m||0===E.length||(t=E,!Array.isArray(t)||!t.every((e=>["1","2","3","4","5"].includes(e)))))return null;var t;const o=(0,n.__)("Rating","woocommerce");return(0,e.createElement)("li",null,(0,e.createElement)("span",{className:"wc-block-active-filters__list-item-type"},o,":"),(0,e.createElement)("ul",null,E.map((e=>X({type:o,name:(0,n.sprintf)(/* translators: %s is referring to the average rating value */ /* translators: %s is referring to the average rating value */
(0,n.__)("Rated %s out of 5","woocommerce"),e),removeCallback:()=>{if(ee({rating_filter:e}),!s){const t=E.filter((t=>t!==e));h(t)}},showLabel:!1,displayStyle:r.displayStyle})))))}),[m,E,h,r.displayStyle,s]);if(!m&&!(p.length>0||f.length>0||E.length>0||Number.isFinite(g)||Number.isFinite(w))&&!o)return a(!1),null;const j=`h${r.headingLevel}`,N=(0,e.createElement)(j,{className:"wc-block-active-filters__title"},r.heading),x=m?(0,e.createElement)(D,null,N):N;if(!(0,l.getSettingWithCoercion)("hasFilterableProducts",!1,T))return a(!1),null;a(!0);const L=R()("wc-block-active-filters__list",{"wc-block-active-filters__list--chips":"chips"===r.displayStyle,"wc-block-active-filters--loading":m});return(0,e.createElement)(e.Fragment,null,!o&&r.heading&&x,(0,e.createElement)("div",{className:"wc-block-active-filters"},(0,e.createElement)("ul",{className:L},o?(0,e.createElement)(e.Fragment,null,X({type:(0,n.__)("Size","woocommerce"),name:(0,n.__)("Small","woocommerce"),displayStyle:r.displayStyle}),X({type:(0,n.__)("Color","woocommerce"),name:(0,n.__)("Blue","woocommerce"),displayStyle:r.displayStyle})):(0,e.createElement)(e.Fragment,null,(0,e.createElement)(fe,{isLoading:m,displayStyle:r.displayStyle}),A,k,P,O)),m?(0,e.createElement)("span",{className:"wc-block-active-filters__clear-all-placeholder"}):(0,e.createElement)("button",{className:"wc-block-active-filters__clear-all",onClick:()=>{(()=>{if(!window)return;const e=window.location.href,t=(0,$.getQueryArgs)(e),r=(0,$.removeQueryArgs)(e,...Object.keys(t)),o=Object.fromEntries(Object.keys(t).filter((e=>!re(e))).map((e=>[e,t[e]])));Y((0,$.addQueryArgs)(r,o))})(),s||(b(void 0),_(void 0),d([]),y([]),h([]))}},(0,e.createElement)(B.Label,{label:(0,n.__)("Clear All","woocommerce"),screenReaderLabel:(0,n.__)("Clear All Filters","woocommerce")}))))},getProps:e=>{return{attributes:(t=e.dataset,{heading:Z(null==t?void 0:t.heading)?t.heading:"",headingLevel:Z(null==t?void 0:t.headingLevel)&&parseInt(t.headingLevel,10)||J.Y4.D.Z,displayStyle:Z(null==t?void 0:t.displayStyle)&&t.displayStyle||J.Y4.P.Z}),isEditor:!1};var t}})})()})();
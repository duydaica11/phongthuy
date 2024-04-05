(()=>{var e,t={4185:(e,t,r)=>{"use strict";r.r(t);var l=r(9196);const c=window.wp.blocks,o=window.wc.wcSettings;var a=r(2911),n=r(6855);const s=JSON.parse('{"name":"woocommerce/product-tag","title":"Products by Tag","category":"woocommerce","keywords":["WooCommerce"],"description":"Display a grid of products with selected tags.","supports":{"align":["wide","full"],"html":false},"attributes":{"columns":{"type":"number","default":3},"rows":{"type":"number","default":3},"alignButtons":{"type":"boolean","default":false},"contentVisibility":{"type":"object","default":{"image":true,"title":true,"price":true,"rating":true,"button":true},"properties":{"image":{"type":"boolean","default":true},"title":{"type":"boolean","default":true},"price":{"type":"boolean","default":true},"rating":{"type":"boolean","default":true},"button":{"type":"boolean","default":true}}},"tags":{"type":"array","default":[]},"tagOperator":{"type":"string","default":"any"},"orderby":{"type":"string","default":"date"},"isPreview":{"type":"boolean","default":false},"stockStatus":{"type":"array"}},"textdomain":"woocommerce","apiVersion":2,"$schema":"https://schemas.wp.org/trunk/block.json"}'),i=window.wp.blockEditor,m=window.wp.serverSideRender;var d=r.n(m),u=r(5736);const h=window.wp.components;var E=r(9307);const g=({onChange:e,settings:t})=>{const{image:r,button:c,price:o,rating:a,title:n}=t,s=!1!==r;return(0,l.createElement)(l.Fragment,null,(0,l.createElement)(h.ToggleControl,{label:(0,u.__)("Product image","woocommerce"),checked:s,onChange:()=>e({...t,image:!s})}),(0,l.createElement)(h.ToggleControl,{label:(0,u.__)("Product title","woocommerce"),checked:n,onChange:()=>e({...t,title:!n})}),(0,l.createElement)(h.ToggleControl,{label:(0,u.__)("Product price","woocommerce"),checked:o,onChange:()=>e({...t,price:!o})}),(0,l.createElement)(h.ToggleControl,{label:(0,u.__)("Product rating","woocommerce"),checked:a,onChange:()=>e({...t,rating:!a})}),(0,l.createElement)(h.ToggleControl,{label:(0,u.__)("Add to Cart button","woocommerce"),checked:c,onChange:()=>e({...t,button:!c})}))},p=(e,t,r)=>r?Math.min(e,t)===e?t:Math.max(e,r)===e?r:e:Math.max(e,t)===t?e:t,w=({columns:e,rows:t,setAttributes:r,alignButtons:c,minColumns:o=1,maxColumns:a=6,minRows:n=1,maxRows:s=6})=>(0,l.createElement)(l.Fragment,null,(0,l.createElement)(h.RangeControl,{label:(0,u.__)("Columns","woocommerce"),value:e,onChange:e=>{const t=p(e,o,a);r({columns:Number.isNaN(t)?"":t})},min:o,max:a}),(0,l.createElement)(h.RangeControl,{label:(0,u.__)("Rows","woocommerce"),value:t,onChange:e=>{const t=p(e,n,s);r({rows:Number.isNaN(t)?"":t})},min:n,max:s}),(0,l.createElement)(h.ToggleControl,{label:(0,u.__)("Align the last block to the bottom","woocommerce"),help:c?(0,u.__)("Align the last block to the bottom.","woocommerce"):(0,u.__)("The last inner block will follow other content.","woocommerce"),checked:c,onChange:()=>r({alignButtons:!c})}));var b=r(2720),_=r(3849),f=r.n(_),y=r(4333);const x={clear:(0,u.__)("Clear all selected items","woocommerce"),noItems:(0,u.__)("No items found.","woocommerce"),
/* Translators: %s search term */
noResults:(0,u.__)("No results for %s","woocommerce"),search:(0,u.__)("Search for items","woocommerce"),selected:e=>(0,u.sprintf)(/* translators: Number of items selected from list. */ /* translators: Number of items selected from list. */
(0,u._n)("%d item selected","%d items selected",e,"woocommerce"),e),updated:(0,u.__)("Search results updated.","woocommerce")},v=(e,t=e)=>{const r=e.reduce(((e,t)=>{const r=t.parent||0;return e[r]||(e[r]=[]),e[r].push(t),e}),{}),l=("id",t.reduce(((e,t)=>(e[String(t.id)]=t,e)),{}));const c=["0"],o=(e={})=>e.parent?[...o(l[e.parent]),e.name]:e.name?[e.name]:[],a=e=>e.map((e=>{const t=r[e.id];return c.push(""+e.id),{...e,breadcrumbs:o(l[e.parent]),children:t&&t.length?a(t):[]}})),n=a(r[0]||[]);return Object.entries(r).forEach((([e,t])=>{c.includes(e)||n.push(...a(t||[]))})),n},k=(e,t)=>{if(!t)return e;const r=new RegExp(`(${t.replace(/[-\/\\^$*+?.()|[\]{}]/g,"\\$&")})`,"ig");return e.split(r).map(((e,t)=>r.test(e)?(0,l.createElement)("strong",{key:t},e):(0,l.createElement)(E.Fragment,{key:t},e)))};function C(e,t,r){const l=new Set(t.map((e=>e[r])));return e.filter((e=>!l.has(e[r])))}const S=window.wp.htmlEntities,N=({label:e})=>(0,l.createElement)("span",{className:"woocommerce-search-list__item-count"},e),P=e=>{const{item:t,search:r}=e,c=t.breadcrumbs&&t.breadcrumbs.length;return(0,l.createElement)("span",{className:"woocommerce-search-list__item-label"},c?(0,l.createElement)("span",{className:"woocommerce-search-list__item-prefix"},1===(o=t.breadcrumbs).length?o.slice(0,1).toString():2===o.length?o.slice(0,1).toString()+" › "+o.slice(-1).toString():o.slice(0,1).toString()+" … "+o.slice(-1).toString()):null,(0,l.createElement)("span",{className:"woocommerce-search-list__item-name"},k((0,S.decodeEntities)(t.name),r)));var o},O=({countLabel:e,className:t,depth:r=0,controlId:c="",item:o,isSelected:a,isSingle:n,onSelect:s,search:i="",selected:m,useExpandedPanelId:d,...u})=>{var g,p;const[w,b]=d,_=null!=e&&void 0!==o.count&&null!==o.count,y=!(null===(g=o.breadcrumbs)||void 0===g||!g.length),x=!(null===(p=o.children)||void 0===p||!p.length),v=w===o.id,O=f()(["woocommerce-search-list__item",`depth-${r}`,t],{"has-breadcrumbs":y,"has-children":x,"has-count":_,"is-expanded":v,"is-radio-button":n}),T=u.name||`search-list-item-${c}`,I=`${T}-${o.id}`,B=(0,E.useCallback)((()=>{b(v?-1:Number(o.id))}),[v,o.id,b]);return x?(0,l.createElement)("div",{className:O,onClick:B,onKeyDown:e=>"Enter"===e.key||" "===e.key?B():null,role:"treeitem",tabIndex:0},n?(0,l.createElement)(l.Fragment,null,(0,l.createElement)("input",{type:"radio",id:I,name:T,value:o.value,onChange:s(o),onClick:e=>e.stopPropagation(),checked:a,className:"woocommerce-search-list__item-input",...u}),(0,l.createElement)(P,{item:o,search:i}),_?(0,l.createElement)(N,{label:e||o.count}):null):(0,l.createElement)(l.Fragment,null,(0,l.createElement)(h.CheckboxControl,{className:"woocommerce-search-list__item-input",checked:a,...!a&&o.children.some((e=>m.find((t=>t.id===e.id))))?{indeterminate:!0}:{},label:k((0,S.decodeEntities)(o.name),i),onChange:()=>{a?s(C(m,o.children,"id"))():s(function(e,t,r){const l=C(t,e,"id");return[...e,...l]}(m,o.children))()},onClick:e=>e.stopPropagation()}),_?(0,l.createElement)(N,{label:e||o.count}):null)):(0,l.createElement)("label",{htmlFor:I,className:O},n?(0,l.createElement)(l.Fragment,null,(0,l.createElement)("input",{...u,type:"radio",id:I,name:T,value:o.value,onChange:s(o),checked:a,className:"woocommerce-search-list__item-input"}),(0,l.createElement)(P,{item:o,search:i})):(0,l.createElement)(h.CheckboxControl,{...u,id:I,name:T,className:"woocommerce-search-list__item-input",value:(0,S.decodeEntities)(o.value),label:k((0,S.decodeEntities)(o.name),i),onChange:s(o),checked:a}),_?(0,l.createElement)(N,{label:e||o.count}):null)},T=O;var I=r(837);r(1058);const B=({id:e,label:t,popoverContents:r,remove:c,screenReaderLabel:o,className:n=""})=>{const[s,i]=(0,E.useState)(!1),m=(0,y.useInstanceId)(B);if(o=o||t,!t)return null;t=(0,S.decodeEntities)(t);const d=f()("woocommerce-tag",n,{"has-remove":!!c}),g=`woocommerce-tag__label-${m}`,p=(0,l.createElement)(l.Fragment,null,(0,l.createElement)("span",{className:"screen-reader-text"},o),(0,l.createElement)("span",{"aria-hidden":"true"},t));return(0,l.createElement)("span",{className:d},r?(0,l.createElement)(h.Button,{className:"woocommerce-tag__text",id:g,onClick:()=>i(!0)},p):(0,l.createElement)("span",{className:"woocommerce-tag__text",id:g},p),r&&s&&(0,l.createElement)(h.Popover,{onClose:()=>i(!1)},r),c&&(0,l.createElement)(h.Button,{className:"woocommerce-tag__remove",onClick:c(e),label:(0,u.sprintf)(
// Translators: %s label.
// Translators: %s label.
(0,u.__)("Remove %s","woocommerce"),t),"aria-describedby":g},(0,l.createElement)(a.Z,{icon:I.Z,size:20,className:"clear-icon",role:"img"})))},R=B;r(9658);const A=e=>(0,l.createElement)(T,{...e}),F=e=>{const{list:t,selected:r,renderItem:c,depth:o=0,onSelect:a,instanceId:n,isSingle:s,search:i,useExpandedPanelId:m}=e,[d]=m;return t?(0,l.createElement)(E.Fragment,null,t.map((t=>{var u,h;const g=null!==(u=t.children)&&void 0!==u&&u.length&&!s?t.children.every((({id:e})=>r.find((t=>t.id===e)))):!!r.find((({id:e})=>e===t.id)),p=(null===(h=t.children)||void 0===h?void 0:h.length)&&d===t.id;return(0,l.createElement)(E.Fragment,{key:t.id},(0,l.createElement)("li",null,c({item:t,isSelected:g,onSelect:a,isSingle:s,selected:r,search:i,depth:o,useExpandedPanelId:m,controlId:n})),p?(0,l.createElement)(F,{...e,list:t.children,depth:o+1}):null)}))):null},$=({isLoading:e,isSingle:t,selected:r,messages:c,onChange:o,onRemove:a})=>{if(e||t||!r)return null;const n=r.length;return(0,l.createElement)("div",{className:"woocommerce-search-list__selected"},(0,l.createElement)("div",{className:"woocommerce-search-list__selected-header"},(0,l.createElement)("strong",null,c.selected(n)),n>0?(0,l.createElement)(h.Button,{variant:"link",isDestructive:!0,onClick:()=>o([]),"aria-label":c.clear},(0,u.__)("Clear all","woocommerce")):null),n>0?(0,l.createElement)("ul",null,r.map(((e,t)=>(0,l.createElement)("li",{key:t},(0,l.createElement)(R,{label:e.name,id:e.id,remove:a}))))):null)},j=({filteredList:e,search:t,onSelect:r,instanceId:c,useExpandedPanelId:o,...n})=>{const{messages:s,renderItem:i,selected:m,isSingle:d}=n,h=i||A;return 0===e.length?(0,l.createElement)("div",{className:"woocommerce-search-list__list is-not-found"},(0,l.createElement)("span",{className:"woocommerce-search-list__not-found-icon"},(0,l.createElement)(a.Z,{icon:b.Z,role:"img"})),(0,l.createElement)("span",{className:"woocommerce-search-list__not-found-text"},t?(0,u.sprintf)(s.noResults,t):s.noItems)):(0,l.createElement)("ul",{className:"woocommerce-search-list__list"},(0,l.createElement)(F,{useExpandedPanelId:o,list:e,selected:m,renderItem:h,onSelect:r,instanceId:c,isSingle:d,search:t}))},M=e=>{const{className:t="",isCompact:r,isHierarchical:c,isLoading:o,isSingle:a,list:n,messages:s=x,onChange:i,onSearch:m,selected:d,type:g="text",debouncedSpeak:p}=e,[w,b]=(0,E.useState)(""),_=(0,E.useState)(-1),k=(0,y.useInstanceId)(M),C=(0,E.useMemo)((()=>({...x,...s})),[s]),S=(0,E.useMemo)((()=>((e,t,r)=>{if(!t)return r?v(e):e;const l=new RegExp(t.replace(/[-\/\\^$*+?.()|[\]{}]/g,"\\$&"),"i"),c=e.map((e=>!!l.test(e.name)&&e)).filter(Boolean);return r?v(c,e):c})(n,w,c)),[n,w,c]);(0,E.useEffect)((()=>{p&&p(C.updated)}),[p,C]),(0,E.useEffect)((()=>{"function"==typeof m&&m(w)}),[w,m]);const N=(0,E.useCallback)((e=>()=>{a&&i([]);const t=d.findIndex((({id:t})=>t===e));i([...d.slice(0,t),...d.slice(t+1)])}),[a,d,i]),P=(0,E.useCallback)((e=>()=>{Array.isArray(e)?i(e):-1===d.findIndex((({id:t})=>t===e.id))?i(a?[e]:[...d,e]):N(e.id)()}),[a,N,i,d]),O=(0,E.useCallback)((e=>{const[t]=d.filter((t=>!e.find((e=>t.id===e.id))));N(t.id)()}),[N,d]);return(0,l.createElement)("div",{className:f()("woocommerce-search-list",t,{"is-compact":r,"is-loading":o,"is-token":"token"===g})},"text"===g&&(0,l.createElement)($,{...e,onRemove:N,messages:C}),(0,l.createElement)("div",{className:"woocommerce-search-list__search"},"text"===g?(0,l.createElement)(h.TextControl,{label:C.search,type:"search",value:w,onChange:e=>b(e)}):(0,l.createElement)(h.FormTokenField,{disabled:o,label:C.search,onChange:O,onInputChange:e=>b(e),suggestions:[],__experimentalValidateInput:()=>!1,value:o?[(0,u.__)("Loading…","woocommerce")]:d.map((e=>({...e,value:e.name}))),__experimentalShowHowTo:!1})),o?(0,l.createElement)("div",{className:"woocommerce-search-list__list"},(0,l.createElement)(h.Spinner,null)):(0,l.createElement)(j,{...e,search:w,filteredList:S,messages:C,onSelect:P,instanceId:k,useExpandedPanelId:_}))};(0,h.withSpokenMessages)(M);var Z=r(2600);const L=({item:e,search:t,depth:r=0,...c})=>{const o=e.breadcrumbs.length?`${e.breadcrumbs.join(", ")}, ${e.name}`:e.name;return(0,l.createElement)(O,{className:f()("woocommerce-product-tags__item","has-count",{"is-searching":t.length>0,"is-skip-level":0===r&&0!==e.parent}),item:e,search:t,depth:r,...c,ariaLabel:(0,u.sprintf)(/* translators: %1$d is the count of products, %2$s is the name of the tag. */ /* translators: %1$d is the count of products, %2$s is the name of the tag. */
(0,u._n)("%1$d product tagged as %2$s","%1$d products tagged as %2$s",e.count,"woocommerce"),e.count,o)})},D=window.wp.url,W=window.wp.apiFetch;var V=r.n(W);const H=({selected:e=[],search:t})=>{const r=(({selected:e=[],search:t})=>{const r=(0,o.getSetting)("limitTags",!1),l=[(0,D.addQueryArgs)("wc/store/v1/products/tags",{per_page:r?100:0,orderby:r?"count":"name",order:r?"desc":"asc",search:t})];return r&&e.length&&l.push((0,D.addQueryArgs)("wc/store/v1/products/tags",{include:e})),l})({selected:e,search:t});return Promise.all(r.map((e=>V()({path:e})))).then((e=>((e,t)=>{const r=new Map;return e.filter((e=>{const l=t(e);return!r.has(l)&&(r.set(l,e),!0)}))})(e.flat(),(e=>e.id))))};r(1011);const J=({isCompact:e=!1,onChange:t,onOperatorChange:r,operator:c="any",selected:a})=>{const[n,s]=(0,E.useState)([]),[i,m]=(0,E.useState)(!0),[d,g]=(0,E.useState)(!1),p=(0,o.getSetting)("limitTags",!1),w=(0,E.useMemo)((()=>n.filter((e=>a.includes(e.id)))),[n,a]),b=(0,E.useCallback)((e=>{m(!0),H({selected:a,search:e}).then((e=>{s(e),m(!1)})).catch((()=>{m(!1)}))}),[a]);(0,E.useEffect)((()=>{d||(b(""),g(!0))}),[b,d]);const _=(0,Z.y1)(b,400),f={clear:(0,u.__)("Clear all product tags","woocommerce"),list:(0,u.__)("Product Tags","woocommerce"),noItems:(0,u.__)("You have not set up any product tags on your store.","woocommerce"),search:(0,u.__)("Search for product tags","woocommerce"),selected:e=>(0,u.sprintf)(/* translators: %d is the count of selected tags. */ /* translators: %d is the count of selected tags. */
(0,u._n)("%d tag selected","%d tags selected",e,"woocommerce"),e),updated:(0,u.__)("Tag search results updated.","woocommerce")};return(0,l.createElement)(l.Fragment,null,(0,l.createElement)(M,{className:"woocommerce-product-tags",list:n,isLoading:i,selected:w,onChange:t,onSearch:p?_:void 0,renderItem:L,messages:f,isCompact:e,isHierarchical:!0,isSingle:!1}),!!r&&(0,l.createElement)("div",{hidden:a.length<2},(0,l.createElement)(h.SelectControl,{className:"woocommerce-product-tags__operator",label:(0,u.__)("Display products matching","woocommerce"),help:(0,u.__)("Pick at least two tags to use this setting.","woocommerce"),value:c,onChange:r,options:[{label:(0,u.__)("Any selected tags","woocommerce"),value:"any"},{label:(0,u.__)("All selected tags","woocommerce"),value:"all"}]})))},G=({value:e,setAttributes:t})=>(0,l.createElement)(h.SelectControl,{label:(0,u.__)("Order products by","woocommerce"),value:e,options:[{label:(0,u.__)("Newness - newest first","woocommerce"),value:"date"},{label:(0,u.__)("Price - low to high","woocommerce"),value:"price_asc"},{label:(0,u.__)("Price - high to low","woocommerce"),value:"price_desc"},{label:(0,u.__)("Rating - highest first","woocommerce"),value:"rating"},{label:(0,u.__)("Sales - most first","woocommerce"),value:"popularity"},{label:(0,u.__)("Title - alphabetical","woocommerce"),value:"title"},{label:(0,u.__)("Menu Order","woocommerce"),value:"menu_order"}],onChange:e=>t({orderby:e})}),Q=(0,o.getSetting)("hideOutOfStockItems",!1),z=(0,o.getSetting)("stockStatusOptions",{}),K=({value:e,setAttributes:t})=>{const{outofstock:r,...c}=z,o=Q?c:z,a=Object.entries(o).map((([e,t])=>({value:e,label:t}))).filter((e=>!!e.label)),n=Object.keys(o).filter((e=>!!e)),[s,i]=(0,E.useState)(e||n);(0,E.useEffect)((()=>{t({stockStatus:["",...s]})}),[s,t]);const m=(0,E.useCallback)((e=>{const t=s.includes(e),r=s.filter((t=>t!==e));t||(r.push(e),r.sort()),i(r)}),[s]);return(0,l.createElement)(l.Fragment,null,a.map((e=>{const t=s.includes(e.value)?/* translators: %s stock status. */ /* translators: %s stock status. */(0,u.__)('Stock status "%s" visible.',"woocommerce"):/* translators: %s stock status. */ /* translators: %s stock status. */(0,u.__)('Stock status "%s" hidden.',"woocommerce");return(0,l.createElement)(h.ToggleControl,{label:e.label,key:e.value,help:(0,u.sprintf)(t,e.label),checked:s.includes(e.value),onChange:()=>m(e.value)})})))},Y=(0,l.createElement)("svg",{xmlns:"http://www.w3.org/2000/svg",fill:"none",viewBox:"0 0 230 250",style:{width:"100%"}},(0,l.createElement)("title",null,"Grid Block Preview"),(0,l.createElement)("rect",{width:"65.374",height:"65.374",x:".162",y:".779",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"47.266",height:"5.148",x:"9.216",y:"76.153",fill:"#E1E3E6",rx:"2.574"}),(0,l.createElement)("rect",{width:"62.8",height:"15",x:"1.565",y:"101.448",fill:"#E1E3E6",rx:"5"}),(0,l.createElement)("rect",{width:"65.374",height:"65.374",x:".162",y:"136.277",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"47.266",height:"5.148",x:"9.216",y:"211.651",fill:"#E1E3E6",rx:"2.574"}),(0,l.createElement)("rect",{width:"62.8",height:"15",x:"1.565",y:"236.946",fill:"#E1E3E6",rx:"5"}),(0,l.createElement)("rect",{width:"65.374",height:"65.374",x:"82.478",y:".779",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"47.266",height:"5.148",x:"91.532",y:"76.153",fill:"#E1E3E6",rx:"2.574"}),(0,l.createElement)("rect",{width:"62.8",height:"15",x:"83.882",y:"101.448",fill:"#E1E3E6",rx:"5"}),(0,l.createElement)("rect",{width:"65.374",height:"65.374",x:"82.478",y:"136.277",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"47.266",height:"5.148",x:"91.532",y:"211.651",fill:"#E1E3E6",rx:"2.574"}),(0,l.createElement)("rect",{width:"62.8",height:"15",x:"83.882",y:"236.946",fill:"#E1E3E6",rx:"5"}),(0,l.createElement)("rect",{width:"65.374",height:"65.374",x:"164.788",y:".779",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"47.266",height:"5.148",x:"173.843",y:"76.153",fill:"#E1E3E6",rx:"2.574"}),(0,l.createElement)("rect",{width:"62.8",height:"15",x:"166.192",y:"101.448",fill:"#E1E3E6",rx:"5"}),(0,l.createElement)("rect",{width:"65.374",height:"65.374",x:"164.788",y:"136.277",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"47.266",height:"5.148",x:"173.843",y:"211.651",fill:"#E1E3E6",rx:"2.574"}),(0,l.createElement)("rect",{width:"62.8",height:"15",x:"166.192",y:"236.946",fill:"#E1E3E6",rx:"5"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"13.283",y:"86.301",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"21.498",y:"86.301",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"29.713",y:"86.301",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"37.927",y:"86.301",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"46.238",y:"86.301",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"95.599",y:"86.301",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"103.814",y:"86.301",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"112.029",y:"86.301",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"120.243",y:"86.301",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"128.554",y:"86.301",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"177.909",y:"86.301",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"186.124",y:"86.301",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"194.339",y:"86.301",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"202.553",y:"86.301",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"210.864",y:"86.301",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"13.283",y:"221.798",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"21.498",y:"221.798",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"29.713",y:"221.798",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"37.927",y:"221.798",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"46.238",y:"221.798",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"95.599",y:"221.798",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"103.814",y:"221.798",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"112.029",y:"221.798",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"120.243",y:"221.798",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"128.554",y:"221.798",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"177.909",y:"221.798",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"186.124",y:"221.798",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"194.339",y:"221.798",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"202.553",y:"221.798",fill:"#E1E3E6",rx:"3"}),(0,l.createElement)("rect",{width:"6.177",height:"6.177",x:"210.864",y:"221.798",fill:"#E1E3E6",rx:"3"})),q=e=>"number"==typeof e,U=(0,h.withSpokenMessages)((({attributes:e,name:t,setAttributes:r,debouncedSpeak:c})=>{const[s,m]=(0,E.useState)({}),[p,b]=(0,E.useState)(!1);(0,E.useEffect)((()=>{e.tags.length||b(!0)}),[e.tags.length]);const _=()=>{b(!1),m({})};return e.isPreview?Y:(0,o.getSetting)("hasTags",!0)?(0,l.createElement)(l.Fragment,null,(0,l.createElement)(i.BlockControls,null,(0,l.createElement)(h.ToolbarGroup,{controls:[{icon:"edit",title:(0,u.__)("Edit selected tags","woocommerce"),onClick:()=>p?_():(b(!0),void m({})),isActive:p}]})),(()=>{const{columns:t,tagOperator:c,contentVisibility:a,orderby:n,rows:s,alignButtons:m,stockStatus:d}=e;return(0,l.createElement)(i.InspectorControls,{key:"inspector"},(0,l.createElement)(h.PanelBody,{title:(0,u.__)("Product Tag","woocommerce"),initialOpen:!e.tags.length&&!p},(0,l.createElement)(J,{selected:e.tags,onChange:(e=[])=>{const t=e.map((({id:e})=>e));r({tags:t})},operator:c,onOperatorChange:(e="any")=>r({tagOperator:e}),isCompact:!0})),(0,l.createElement)(h.PanelBody,{title:(0,u.__)("Layout","woocommerce"),initialOpen:!0},(0,l.createElement)(w,{columns:t,rows:s,alignButtons:m,setAttributes:r,minColumns:(0,o.getSettingWithCoercion)("minColumns",1,q),maxColumns:(0,o.getSettingWithCoercion)("maxColumns",6,q),minRows:(0,o.getSettingWithCoercion)("minRows",6,q),maxRows:(0,o.getSettingWithCoercion)("maxRows",6,q)})),(0,l.createElement)(h.PanelBody,{title:(0,u.__)("Content","woocommerce"),initialOpen:!0},(0,l.createElement)(g,{settings:a,onChange:e=>r({contentVisibility:e})})),(0,l.createElement)(h.PanelBody,{title:(0,u.__)("Order By","woocommerce"),initialOpen:!1},(0,l.createElement)(G,{setAttributes:r,value:n})),(0,l.createElement)(h.PanelBody,{title:(0,u.__)("Filter by stock status","woocommerce"),initialOpen:!1},(0,l.createElement)(K,{setAttributes:r,value:d})))})(),p?(()=>{const t={...e,...s};return(0,l.createElement)(h.Placeholder,{icon:(0,l.createElement)(a.Z,{icon:n.Z,className:"block-editor-block-icon"}),label:(0,u.__)("Products by Tag","woocommerce"),className:"wc-block-products-grid wc-block-product-tag"},(0,u.__)("Display a grid of products from your selected tags.","woocommerce"),(0,l.createElement)("div",{className:"wc-block-product-tag__selection"},(0,l.createElement)(J,{selected:t.tags,onChange:(e=[])=>{const t=e.map((({id:e})=>e));m({...s,tags:t})},operator:t.tagOperator,onOperatorChange:(e="any")=>m({...s,tagOperator:e})}),(0,l.createElement)(h.Button,{variant:"primary",onClick:()=>{r(s),_(),c((0,u.__)("Showing Products by Tag block preview.","woocommerce"))}},(0,u.__)("Done","woocommerce")),(0,l.createElement)(h.Button,{className:"wc-block-product-tag__cancel-button",variant:"tertiary",onClick:()=>{_(),c((0,u.__)("Showing Products by Tag block preview.","woocommerce"))}},(0,u.__)("Cancel","woocommerce"))))})():(()=>{const r=e.tags.length;return(0,l.createElement)(h.Disabled,null,r?(0,l.createElement)(d(),{block:t,attributes:e}):(0,l.createElement)(h.Placeholder,{icon:(0,l.createElement)(a.Z,{icon:n.Z,className:"block-editor-block-icon"}),label:(0,u.__)("Products by Tag","woocommerce"),className:"wc-block-products-grid wc-block-product-tag"},(0,u.__)("This block displays products from selected tags. Select at least one tag to display its products.","woocommerce")))})()):(0,l.createElement)(h.Placeholder,{icon:(0,l.createElement)(a.Z,{icon:n.Z,className:"block-editor-block-icon"}),label:(0,u.__)("Products by Tag","woocommerce"),className:"wc-block-products-grid wc-block-product-tag"},(0,u.__)("This block displays products from selected tags. To use it you first need to create products and assign tags to them.","woocommerce"))}));r(5855),(0,c.registerBlockType)(s,{icon:{src:(0,l.createElement)(a.Z,{icon:n.Z,className:"wc-block-editor-components-block-icon"})},attributes:{...s.attributes,columns:{type:"number",default:(0,o.getSetting)("defaultColumns",3)},rows:{type:"number",default:(0,o.getSetting)("defaultRows",3)},tags:{type:"array",default:[]},stockStatus:{type:"array",default:Object.keys((0,o.getSetting)("stockStatusOptions",[]))}},edit:e=>{const t=(0,i.useBlockProps)();return(0,l.createElement)("div",{...t},(0,l.createElement)(U,{...e}))},save:()=>null})},5855:()=>{},1011:()=>{},9658:()=>{},1058:()=>{},9196:e=>{"use strict";e.exports=window.React},4333:e=>{"use strict";e.exports=window.wp.compose},9307:e=>{"use strict";e.exports=window.wp.element},5736:e=>{"use strict";e.exports=window.wp.i18n},444:e=>{"use strict";e.exports=window.wp.primitives}},r={};function l(e){var c=r[e];if(void 0!==c)return c.exports;var o=r[e]={exports:{}};return t[e].call(o.exports,o,o.exports,l),o.exports}l.m=t,e=[],l.O=(t,r,c,o)=>{if(!r){var a=1/0;for(m=0;m<e.length;m++){for(var[r,c,o]=e[m],n=!0,s=0;s<r.length;s++)(!1&o||a>=o)&&Object.keys(l.O).every((e=>l.O[e](r[s])))?r.splice(s--,1):(n=!1,o<a&&(a=o));if(n){e.splice(m--,1);var i=c();void 0!==i&&(t=i)}}return t}o=o||0;for(var m=e.length;m>0&&e[m-1][2]>o;m--)e[m]=e[m-1];e[m]=[r,c,o]},l.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return l.d(t,{a:t}),t},l.d=(e,t)=>{for(var r in t)l.o(t,r)&&!l.o(e,r)&&Object.defineProperty(e,r,{enumerable:!0,get:t[r]})},l.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),l.r=e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},l.j=3508,(()=>{var e={3508:0};l.O.j=t=>0===e[t];var t=(t,r)=>{var c,o,[a,n,s]=r,i=0;if(a.some((t=>0!==e[t]))){for(c in n)l.o(n,c)&&(l.m[c]=n[c]);if(s)var m=s(l)}for(t&&t(r);i<a.length;i++)o=a[i],l.o(e,o)&&e[o]&&e[o][0](),e[o]=0;return l.O(m)},r=self.webpackChunkwebpackWcBlocksJsonp=self.webpackChunkwebpackWcBlocksJsonp||[];r.forEach(t.bind(null,0)),r.push=t.bind(null,r.push.bind(r))})();var c=l.O(void 0,[2869],(()=>l(4185)));c=l.O(c),((this.wc=this.wc||{}).blocks=this.wc.blocks||{})["product-tag"]=c})();
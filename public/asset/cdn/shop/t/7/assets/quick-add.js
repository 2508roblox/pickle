customElements.get("quick-add-modal")||customElements.define("quick-add-modal",class extends ModalDialog{constructor(){super(),this.modalContent=this.querySelector('[id^="QuickAddInfo-"]'),this.addEventListener("product-info:loaded",({target})=>{target.addPreProcessCallback(this.preprocessHTML.bind(this))})}hide(preventFocus=!1){const cartNotification=document.querySelector("cart-notification")||document.querySelector("cart-drawer");cartNotification&&cartNotification.setActiveElement(this.openedBy),this.modalContent.innerHTML="",preventFocus&&(this.openedBy=null),super.hide()}show(opener){opener.setAttribute("aria-disabled",!0),opener.classList.add("loading"),opener.querySelector(".loading__spinner").classList.remove("hidden"),fetch(opener.getAttribute("data-product-url")).then(response=>response.text()).then(responseText=>{const productElement=new DOMParser().parseFromString(responseText,"text/html").querySelector("product-info");this.preprocessHTML(productElement),HTMLUpdateUtility.setInnerHTML(this.modalContent,productElement.outerHTML),window.Shopify&&Shopify.PaymentButton&&Shopify.PaymentButton.init(),window.ProductModel&&window.ProductModel.loadShopifyXR(),super.show(opener)}).finally(()=>{opener.removeAttribute("aria-disabled"),opener.classList.remove("loading"),opener.querySelector(".loading__spinner").classList.add("hidden")})}preprocessHTML(productElement){productElement.classList.forEach(classApplied=>{(classApplied.startsWith("color-")||classApplied==="gradient")&&this.modalContent.classList.add(classApplied)}),this.preventDuplicatedIDs(productElement),this.removeDOMElements(productElement),this.removeGalleryListSemantic(productElement),this.updateImageSizes(productElement),this.preventVariantURLSwitching(productElement)}preventVariantURLSwitching(productElement){productElement.setAttribute("data-update-url","false")}removeDOMElements(productElement){const pickupAvailability=productElement.querySelector("pickup-availability");pickupAvailability&&pickupAvailability.remove();const productModal=productElement.querySelector("product-modal");productModal&&productModal.remove();const modalDialog=productElement.querySelectorAll("modal-dialog");modalDialog&&modalDialog.forEach(modal=>modal.remove())}preventDuplicatedIDs(productElement){const sectionId=productElement.dataset.section,oldId=sectionId,newId=`quickadd-${sectionId}`;productElement.innerHTML=productElement.innerHTML.replaceAll(oldId,newId),Array.from(productElement.attributes).forEach(attribute=>{attribute.value.includes(oldId)&&productElement.setAttribute(attribute.name,attribute.value.replace(oldId,newId))}),productElement.dataset.originalSection=sectionId}removeGalleryListSemantic(productElement){const galleryList=productElement.querySelector('[id^="Slider-Gallery"]');galleryList&&(galleryList.setAttribute("role","presentation"),galleryList.querySelectorAll('[id^="Slide-"]').forEach(li=>li.setAttribute("role","presentation")))}updateImageSizes(productElement){const product=productElement.querySelector(".product");if(!product?.classList.contains("product--columns"))return;const mediaImages=product.querySelectorAll(".product__media img");if(!mediaImages.length)return;let mediaImageSizes="(min-width: 1000px) 715px, (min-width: 750px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)";product.classList.contains("product--medium")?mediaImageSizes=mediaImageSizes.replace("715px","605px"):product.classList.contains("product--small")&&(mediaImageSizes=mediaImageSizes.replace("715px","495px")),mediaImages.forEach(img=>img.setAttribute("sizes",mediaImageSizes))}});
//# sourceMappingURL=/cdn/shop/t/7/assets/quick-add.js.map?v=73073840428863680991729322518
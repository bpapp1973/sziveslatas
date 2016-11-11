        $(function() {
        	Galleria.configure({
			    imageCrop: true
			});
            Galleria.run('#galleria', {

			    extend: function(options) {

			        Galleria.log(this) // the gallery instance
			        Galleria.log(options) // the gallery options
	
			        // listen to when an image is shown
			        this.bind('image', function(e) {

			            Galleria.log(e) // the event object may contain custom objects, in this case the main image
			            Galleria.log(e.imageTarget) // the current image

			            // lets make galleria open a lightbox when clicking the main image:
			            $(e.imageTarget).click(this.proxy(function() {
			               this.openLightbox();
			            }));
			        });
			    }
			});
        });

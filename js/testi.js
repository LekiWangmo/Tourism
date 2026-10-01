const testimonials = [

{
name: "JOHN SMITH",
position: "CEO, AGENCY",
image: "images/member1.png",
message: "Lorem Ipsum is simply dummy text of the printing and typesetting industry."
},

{
name: "SARAH WILLIAMS",
position: "Marketing Manager",
image: "images/member2.jpg",
message: "This company delivered amazing results. Their team is professional and reliable."
},

{
name: "MICHAEL BROWN",
position: "Startup Founder",
image: "images/member4.jpg",
message: "Outstanding service and support. I highly recommend them to anyone."
}

];

let index = 0;

function showTestimonial(){

document.getElementById("name").innerText = testimonials[index].name;
document.getElementById("position").innerText = testimonials[index].position;
document.getElementById("message").innerText = testimonials[index].message;
document.getElementById("avatar").src = testimonials[index].image;

}

function nextTestimonial(){

index++;

if(index >= testimonials.length){
index = 0;
}

showTestimonial();

}

function prevTestimonial(){

index--;

if(index < 0){
index = testimonials.length - 1;
}

showTestimonial();

}
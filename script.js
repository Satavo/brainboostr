/*В отзывах пстрелки перелистывающие отзывы*/
const reviewsContainer = document.querySelector('.reviewers');
const reviews = reviewsContainer.querySelectorAll('.review');
const arrowLeft = document.querySelector('.arrow-left');
const arrowRight = document.querySelector('.arrow-right');

let currentReviewIndex = 0;

function showReview(index) {
  reviews.forEach(review => review.style.display = 'none');
  reviews[index].style.display = 'block';
}

arrowLeft.addEventListener('click', () => {
  if (currentReviewIndex === 0) {
    currentReviewIndex = reviews.length - 1;
  } else {
    currentReviewIndex--;
  }
  showReview(currentReviewIndex);
});

arrowRight.addEventListener('click', () => {
  if (currentReviewIndex === reviews.length - 1) {
    currentReviewIndex = 0;
  } else {
    currentReviewIndex++;
  }
  showReview(currentReviewIndex);
});

showReview(currentReviewIndex);
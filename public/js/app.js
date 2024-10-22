// Line Chart
var ctx = document.getElementById('lineChart1').getContext('2d');
var lineChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11'],
        datasets: [{
            label: 'Doanh Thu',
            data: [50, 55, 70, 80, 60, 50, 40, 70, 80, 30, 100],
            borderColor: 'rgba(75, 192, 192, 1)',
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

var ctx = document.getElementById('lineChart2').getContext('2d');
var lineChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11'],
        datasets: [{
            label: 'Lợi nhuận',
            data: [10, 23, 34, 56, 60, 50, 40, 70, 80, 30, 100],
            borderColor: 'rgba(75, 192, 192, 1)',
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

var pieData1 = {
    labels: ['lớp đã hoàn thành', 'lớp chưa hoàn thành'],
    datasets: [{
        label: 'tỉ lệ',
        data: [43, 57],
        backgroundColor: ['#36a2eb', '#ff6384'],
    }]
};

var pieData2 = {
    labels: ['lớp đã giao thành công', 'lớp giao thất bại'],
    datasets: [{
        label: 'tỉ lệ',
        data: [62, 38],
        backgroundColor: ['#36a2eb', '#ff6384'],
    }]
};

var pieData3 = {
    labels: ['lớp đã hoàn thành2', 'lớp chưa hoàn thành'],
    datasets: [{
        label: 'Lợi Nhuận',
        data: [62, 38],
        backgroundColor: ['#36a2eb', '#ff6384'],
    }]
};

var ctx1 = document.getElementById('pieChart1').getContext('2d');
var pieChart1 = new Chart(ctx1, {
    type: 'pie',
    data: pieData1
});

var ctx2 = document.getElementById('pieChart2').getContext('2d');
var pieChart2 = new Chart(ctx2, {
    type: 'pie',
    data: pieData2
});

var ctx3 = document.getElementById('pieChart3').getContext('2d');
var pieChart3 = new Chart(ctx3, {
    type: 'pie',
    data: pieData3
});


const navLinks = document.querySelectorAll('.nav-link');

navLinks.forEach(link => {
    link.addEventListener('click', function () {
        navLinks.forEach(item => item.classList.remove('active-link'));
        this.classList.add('active-link');
    });
});

function goBack() {
    window.history.back();
}

document.querySelectorAll('td.status').forEach(function(td) {
    if (td.textContent.trim() === 'Đã hoàn thành') {
        td.classList.add('done');
    } else if (td.textContent.trim() === 'Chưa hoàn thành') {
        td.classList.add('not-done');
    }
});

// lọc dữ liệu 
function filterDocuments() {
    var selectedCategory = document.getElementById('filter-category').value;
    var selectedGrade = document.getElementById('filter-grade').value;

    var cards = document.querySelectorAll('.document-card');

    // Lặp qua các thẻ tài liệu và hiển thị thẻ phù hợp với bộ lọc
    cards.forEach(function(card) {
        var cardCategory = card.getAttribute('data-category');
        var cardGrade = card.getAttribute('data-grade');

        if ((selectedCategory === "" || cardCategory === selectedCategory) &&
            (selectedGrade === "" || cardGrade === selectedGrade)) {
            card.style.display = 'block';  // Hiển thị thẻ tài liệu phù hợp
        } else {
            card.style.display = 'none';  // Ẩn thẻ không phù hợp
        }
    });
}


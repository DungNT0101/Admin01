// Custom Bootstrap JavaScript

document.addEventListener('DOMContentLoaded', function () {
    const toggleBtn = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobileTopMenu');
    if (toggleBtn && mobileMenu) {
        toggleBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            mobileMenu.classList.toggle('open');
        });
        // Optional: close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!toggleBtn.contains(e.target) && !mobileMenu.contains(e.target)) {
                mobileMenu.classList.remove('open');
            }
        });
    }

    var topMenu = document.getElementById('topMenu');
    var lastScroll = 0;
    var menuHeight = topMenu.offsetHeight;
    window.addEventListener('scroll', function () {
        if (window.scrollY > menuHeight) {
            if (!topMenu.classList.contains('fixed')) {
                topMenu.classList.add('fixed');
                document.body.classList.add('menu-fixed');
            }
        } else {
            if (topMenu.classList.contains('fixed')) {
                topMenu.classList.remove('fixed');
                document.body.classList.remove('menu-fixed');
            }
        }
    });

});

function updateSaleWatchingCount() {
    let sale_count = 0;
    for (let i = 0; i < localStorage.length; i++) {
        if (localStorage.key(i).startsWith('watching_sale_')) {
            sale_count++;
        }
    }
    // Lưu số lượng vào localStorage
    localStorage.setItem('sale_count', sale_count);
    document.querySelectorAll('.sale-watching-count').forEach(function(el) {
        el.textContent = sale_count;
    });
    // Tính tổng sale_count và rent_count, đảm bảo giá trị mặc định là 0 nếu không tồn tại
    let rent_count = parseInt(localStorage.getItem('rent_count') || '0', 10);
    let watching_properties = sale_count + rent_count;
    localStorage.setItem('watching_properties', watching_properties);
    document.querySelectorAll('.watching-properties-count').forEach(function(el) {
        el.textContent = watching_properties;
    });

    // Cập nhật giá trị watching_sale_ids vào các thẻ có class watching-sale-ids
    let watching_ids = getWatchingSaleIds();
    localStorage.setItem('watching_ids', watching_ids);
    // Cập nhật giá trị vào các thẻ có class watching-ids
    document.querySelectorAll('.watching-ids').forEach(function(el) {
        el.value = watching_ids;
    });
}

function getWatchingSaleIds() {
    const ids = [];
    for (let i = 0; i < localStorage.length; i++) {
        const key = localStorage.key(i);
        if (key.startsWith('watching_sale_')) {
            const id = key.replace('watching_sale_', '');
            ids.push(id);
        }
    }

    return ids;
}

document.querySelectorAll('.favorited').forEach(function(el) {
    var id = el.getAttribute('data-id');
    // Khôi phục trạng thái từ localStorage
    if (localStorage.getItem('watching_sale_' + id)) {
        el.classList.add('watching');
    }
    el.addEventListener('click', function() {
        this.classList.toggle('watching');
        // Kiểm tra nếu có user đăng nhập (biến userId do backend render ra, ví dụ window.userId)
        if (typeof window.userId !== 'undefined' && window.userId) {
            fetch('/api/user/watching', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    property_id: id,
                    watching: this.classList.contains('watching') ? 1 : 0
                })
            });
        } else {
            // Nếu chưa đăng nhập thì lưu localStorage như cũ
            if (this.classList.contains('watching')) {
                localStorage.setItem('watching_sale_' + id, '1');
            } else {
                localStorage.removeItem('watching_sale_' + id);
            }
            updateSaleWatchingCount();
        }
    });
});

document.querySelectorAll('a#deleteProperty').forEach(function(btn) {
    btn.addEventListener('click', function(e) {
        var key = btn.getAttribute('data');
        if (key) {
            localStorage.removeItem(key);
            updateSaleWatchingCount();
        }
        // Ngăn chặn chuyển trang ngay lập tức để đảm bảo localStorage được cập nhật
        // Có thể bỏ preventDefault nếu muốn chuyển trang luôn
        // e.preventDefault();
    });
});

// Cập nhật số lượng khi load trang
updateSaleWatchingCount();

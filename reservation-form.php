<div class="modal">
        <span onclick="closeReservation()">&times;</span>

        <div class="reservation">
            <h2>Reservation Form</h2>
            <form method="POST">
                <label>
                    Customer Name:
                    <input type="text" name="customer_name">
                </label>
                <label>
                    Contact info:
                    <input type="text" name="contact">
                </label>

                <div class="wrapper">

                    <label>
                        Number of Seats:
                        <input type="number" name="reserve_seats">
                    </label>
                    
                    <label>
                        Date:
                        <input type="date" name="reserve_date">
                    </label>
                    <label>
                        Time:
                        <input type="time" name="reserve_time">
                    </label>
                </div>
                <input type="submit">
            </form>
        </div>
    </div>

<?php
// Set the page variable for the header to load the correct CSS
$page = 'account';
// Include the header
include 'includes/header.php';

// Redirect if not logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
?>

<main class="container">
    <section class="account-section">
        <h2>Account Dashboard</h2>
        
        <?php if ($_SESSION['login_role'] == 'customer'): ?>
            <div class="dashboard-container">
              <h3 class="dashboard-title">Your Customer Dashboard</h3>
              
              <div class="dashboard-stats">
                <div class="stat-box">
                  <div class="number">5</div>
                  <div class="label">Saved Services</div>
                </div>
                <div class="stat-box">
                  <div class="number">2</div>
                  <div class="label">Active Projects</div>
                </div>
                <div class="stat-box">
                  <div class="number">3</div>
                  <div class="label">Service Requests</div>
                </div>
              </div>
              
              <div class="dashboard-card">
                <h4><i class="fas fa-bell"></i> Recent Notifications</h4>
                <p>Your project "Website Redesign" has a new message from the service provider.</p>
                <p>Service Provider "DevOps Pro" has accepted your service request.</p>
              </div>
              
              <div class="dashboard-card">
                <h4><i class="fas fa-tasks"></i> Your Active Projects</h4>
                <table class="dashboard-table">
                  <thead>
                    <tr>
                      <th>Project</th>
                      <th>Provider</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Cloud Migration</td>
                      <td>CloudExpert</td>
                      <td>In Progress</td>
                      <td><a href="#" class="action-button">View Details</a></td>
                    </tr>
                    <tr>
                      <td>CI/CD Pipeline Setup</td>
                      <td>DevOps Pro</td>
                      <td>Starting</td>
                      <td><a href="#" class="action-button">View Details</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              
              <div class="action-buttons">
                <a href="#" class="action-button">Browse Services</a>
                <a href="#" class="action-button secondary">Contact Support</a>
              </div>
            </div>
            
        <?php elseif ($_SESSION['login_role'] == 'service_provider'): ?>
            <div class="dashboard-container">
              <h3 class="dashboard-title">Your Service Provider Dashboard</h3>
              
              <div class="dashboard-stats">
                <div class="stat-box">
                  <div class="number">8</div>
                  <div class="label">Active Projects</div>
                </div>
                <div class="stat-box">
                  <div class="number">12</div>
                  <div class="label">Service Offerings</div>
                </div>
                <div class="stat-box">
                  <div class="number">4</div>
                  <div class="label">New Requests</div>
                </div>
                <div class="stat-box">
                  <div class="number">4.8</div>
                  <div class="label">Rating</div>
                </div>
              </div>
              
              <div class="dashboard-card">
                <h4><i class="fas fa-user-clock"></i> Pending Service Requests</h4>
                <table class="dashboard-table">
                  <thead>
                    <tr>
                      <th>Client</th>
                      <th>Service</th>
                      <th>Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>TechCorp</td>
                      <td>Kubernetes Setup</td>
                      <td>2023-05-15</td>
                      <td>
                        <a href="#" class="action-button">Accept</a>
                        <a href="#" class="action-button secondary">Decline</a>
                      </td>
                    </tr>
                    <tr>
                      <td>DataSolutions</td>
                      <td>AWS Migration</td>
                      <td>2023-05-18</td>
                      <td>
                        <a href="#" class="action-button">Accept</a>
                        <a href="#" class="action-button secondary">Decline</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              
              <div class="dashboard-card">
                <h4><i class="fas fa-project-diagram"></i> Your Service Offerings</h4>
                <table class="dashboard-table">
                  <thead>
                    <tr>
                      <th>Service</th>
                      <th>Category</th>
                      <th>Price</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Docker Containerization</td>
                      <td>DevOps</td>
                      <td>$1200</td>
                      <td>Active</td>
                      <td><a href="#" class="action-button">Edit</a></td>
                    </tr>
                    <tr>
                      <td>CI/CD Pipeline Implementation</td>
                      <td>DevOps</td>
                      <td>$1500</td>
                      <td>Active</td>
                      <td><a href="#" class="action-button">Edit</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              
              <div class="action-buttons">
                <a href="#" class="action-button">Add New Service</a>
                <a href="#" class="action-button secondary">View Analytics</a>
              </div>
            </div>
        <?php endif; ?>
    </section>
</main>

<?php
// Include the footer
include 'includes/footer.php';
?>

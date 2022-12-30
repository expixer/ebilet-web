import React from "react";
import { Component } from "react";

class CompaniesIndex extends Component {
    constructor(props) {
        super(props);

        this.state = {
            companies: []
        }
    }

    fetchCompanies() {
        axios.get('/api/products')
            .then(response => this.setState({ companies: response.data.data }))
    }

    componentDidMount() {
        this.fetchCompanies()
    }

    renderCompanies() {
        return this.state.companies.map(company => <tr key={company.id}>
            <td className="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">{company.name}</td>
            <td className="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">{company.price}</td>
            <td className="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">{company.satus}</td>
            <td className="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">{company.creted_at}</td>
            <td className="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                <button value={company.id} onClick={this.deleteCompany} type="button" className="bg-gray-800 hover:bg-gray-700 rounded-md text-white px-4 py-2 font-semibold ease-in-out duration-150">Delete</button>
            </td>
        </tr>);
    }
    deleteCompany = (event) => {
        if (!window.confirm('You sure?')) {
            return
        }

        axios.delete('/api/products/' + event.target.value)
            .then(response => this.fetchCompanies())
            .catch(error => console.log(error));
    }
    render() {
        return (
            <div className="overflow-hidden overflow-x-auto p-6 bg-white border-gray-200">
                <div className="min-w-full align-middle">
                    <table className="min-w-full divide-y divide-gray-200 border">
                        <thead>
                        <tr>
                            <th className="px-6 py-3 bg-gray-50">
                                <span className="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">Name</span>
                            </th>
                            <th className="px-6 py-3 bg-gray-50">
                                <span className="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">Email</span>
                            </th>
                            <th className="px-6 py-3 bg-gray-50">
                                <span className="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">Address</span>
                            </th>
                            <th className="px-6 py-3 bg-gray-50">
                                <span className="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">Website</span>
                            </th>
                            <th className="px-6 py-3 bg-gray-50">
                            </th>
                        </tr>
                        </thead>
                        <tbody className="table-body">
                        {this.renderCompanies()}
                        </tbody>
                    </table>
                </div>
            </div>
        )
    }

}

export default CompaniesIndex

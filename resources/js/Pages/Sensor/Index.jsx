import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, Link } from '@inertiajs/react';
import { Inertia } from '@inertiajs/inertia';
import Swal from 'sweetalert2';

export default function Sensor({ auth, sensor }) {
    // Delete function
    function destroy(e, id) {
        e.preventDefault(); // Prevent default behavior of the button click

        Swal.fire({
            title: 'Are you sure?',
            text: 'You will not be able to recover this sensor!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {
                Inertia.delete(route("sensor.destroy", id));
                Swal.fire({
                    icon: 'success',
                    title: 'Data deleted!',
                    showConfirmButton: false,
                    timer: 3000
                })
                window.location.reload();
            }
        });
    }
    return (
        <AuthenticatedLayout
            user={auth.user} errors={sensor.errors}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Master Sensor</h2>}
        >
            <Head title="Sensor" />
            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 bg-white border-b border-gray-200">
                            <div className="flex items-center justify-end mb-6">
                                <Link className="px-6 py-2 text-white bg-green-500 rounded-md focus:outline-none" href={route("sensor.create")}>Create Sensor</Link>
                            </div>
                            <table className="table-fixed w-full">
                                <thead>
                                    <tr className="bg-gray-100">
                                        <th className="px-4 py-2 w-20">No.</th>
                                        <th className="px-4 py-2">Sensor</th>
                                        <th className="px-4 py-2">Sensor Name</th>
                                        <th className="px-4 py-2">Unit</th>
                                        <th className="px-4 py-2">Created By</th>
                                        <th className="px-4 py-2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {sensor.map(({ id, sensor, sensor_name, unit, created_by }) => (
                                        <tr key={id}>
                                            <td className="border px-4 py-2">{id}</td>
                                            <td className="border px-4 py-2">{sensor}</td>
                                            <td className="border px-4 py-2">{sensor_name}</td>
                                            <td className="border px-4 py-2">{unit}</td>
                                            <td className="border px-4 py-2">{created_by}</td>
                                            <td className="border px-4 py-2">
                                                <Link tabIndex="1" className="px-4 py-2 text-sm text-white bg-blue-500 rounded" href={route("sensor.edit", id)} >Edit</Link>
                                                <button onClick={(e) => destroy(e, id)} tabIndex="-1" type="button" className="mx-1 px-4 py-2 text-sm text-white bg-red-500 rounded" >Delete</button>
                                            </td>
                                        </tr>
                                    ))}
                                    {sensor.length === 0 && (
                                        <tr>
                                            <td className="px-6 py-4 border-t" colSpan="4">No data found.</td>
                                        </tr>
                                    )}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout >
    )
}
